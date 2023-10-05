<!-- 2 routes in my route.php file. Both are working fine. No problem in that.
I was learning route:clear and route:cache and found a small problem below. -->

<!-- if I comment any one route in my route.php file and then run below command -->

php artisan route:cache



<!-- This will keep the route disabled because the route list is in cache now.
Now, go to route.php file and try to remove commented route and then try to run that enabled url.
still it will show 404 because I need to remove cache by using below command -->

php artisan route:clear


<!-- So far everything is understood in localhost. No problem in that. -->
