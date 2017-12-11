#!/bin/bash

if [[ "$1" == "master" ]]
  then
    rm /var/www/neos/Web/evergreengate.php
    cp egg.php /var/www/neos/Web/evergreengate.php
    echo "Successfully deployed project to server."
  else
    echo "Target branch is not master, skipping update."
fi

exit
