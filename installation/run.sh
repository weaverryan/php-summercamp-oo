# copy the environments file
cp .env.example .env

# hiya composer!
composer install --no-dev -n

# setup!
php console assets:install --symlink --relative
php console cache:clear --no-warmup

mysql oop -usummer -pcamp < installation/oo.sql

# it's nice to get a little positive feedback :)
echo 'DING!';
