<!-- Laravel offers us a simple API for making our URL parameters optional in their route definitions.
You simply append your parameter with a question mark? allowing the route helper to construct the URL even if that parameter is absent.
Let's look at an example: -->

routes/web.php
Route::name('user.show')->get('/user/{team}/{status?}', [UserController::class, 'show']);

Http/Controllers/UserController.php


class UserController extends Controller
{
	  public function show(string $team, ?string $status = null)
    {
        // ...
    }
}


<!-- The above code snippet designates a simple user controller method that allows us to fetch users related to teams in an application.
We have two route parameters here. Firstly, the required team parameter, which determines which team we should fetch users from. Secondly,
the optional status parameter might allow us to only fetch users in a certain status. -->


We can generate this URL using Laravel's route helper:
// First let's generate the route with the included
// status parameter
$url = route('user.show', [
    'team' => 'marketing',
    'status' => 'enabled'
]);

// Reults in the URL...
// /user/marketing/enabled

// Now let's generate the same route URL, but this time
// omitting the status parameter
$url = route('user.show', ['team' => 'marketing']);

// Reults in the URL...
// /user/marketing

