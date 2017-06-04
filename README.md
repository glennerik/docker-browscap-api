# docker-browscap-api

## A docker image based on alpine nginx and php that returns browscap details in JSON

### It will download the lates Full_PHP_BrowsCapINI on build

#### To run
* docker build -t browscap-api .
* docker run --name=bc-api -P -d browscap-api

Then you can access localhost:xxxx (the port that docker maps to) and see browscap details.
It uses the http-header HTTP_USER_AGENT for parsing.
If you want to use this based based on a requesting client, just set the User-Agent in the header request to the API.
I may include a POST method for this which will enable you to get return browscap data based on a User-Agent string you send in the POST.
