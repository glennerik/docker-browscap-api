# docker-browscap-api

## A docker image based on alpine nginx and php that returns browscap details in JSON

### It will download the lates Full_PHP_BrowsCapINI on build

#### To run
* docker build -t browscap-api .
* docker run --name=bc-api -P -d browscap-api
