<!-- I would rather pass those optional variables as request parameters to make things easy, i.e my url would look like: -->

http://localhost:8000/gegonota/?gid=&cid=&nid=


<!-- Therefore, I can already set the default for each of the expected parameters as null rather than deal with
inconsistency that may arise from having this kind of wierd /// in my url: -->


<!-- In a controller -->

public funtion index()
{
    //put them in an array
    $my_variables = request()->only(['gid', 'cid', 'nid']);

    //or this way
    $gid = request()->get('gid');
    $cid = request()->get('cid');
    $nid = request()->get('nid');

   <!-- they are default to null if not existing or have no value -->
}

<!-- This means your route declaration is simple, i.e: -->


Route::get('gegonota', ['uses' => 'GegonosController@index','as' => 'gegonota'])
