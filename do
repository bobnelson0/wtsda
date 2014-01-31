#!/bin/bash          
EXPECTED_ARGS=1
E_BADARGS=65
if [ $# -ne $EXPECTED_ARGS ]; then
    echo "Usage: `basename $0` COMMAND";
    echo "COMMANDS: test, cache, assets, dbup, new-e, update";
    exit $E_BADARGS
fi

C="$1"

case "$C" in
"test")
    phpunit -c app/;
    ;;
"cache")
    sudo chmod 777 app/cache/* -R; 
    php app/console cache:clear; 
    php app/console assets:install; 
    sudo chmod 777 app/cache/* -R;
    ;;
"assets")
    app/console assets:install;
    ;;
"dbup")
    php app/console doctrine:schema:update --force;
    ;;
"new-e")
    php app/console doctrine:generate:entity;
    ;;
"update")
    php /home/bob/Applications/php/composer.phar self-update;
    php /home/bob/Applications/php/composer.phar update;
    ;;
*)
    echo "Usage: `basename $0` COMMAND";
    echo "COMMANDS: test, cache, assets, dbup, new-e, update";
    exit $E_BADARGS
    ;;
esac
