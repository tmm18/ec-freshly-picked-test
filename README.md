環境構築

Dockerビルド
・git clone　git@github.com:tmm18/ec-freshly-picked-test.git
・docker-compose up -d --build

laravel環境構築
・docker-compose exec php bash
・compose install
・cp .ecv.example　.env　,環境変数を変更
・php artisan key:genrate
・php artisan mirrate
・php artisan db:seed

開発環境
・商品一覧画面 : http://localhost/products


使用技術(実行環境)
・PHP 8.1.34
・Lalavel 8.83.8
・MySQL 8.0.26
・nginx 1.21.1
・