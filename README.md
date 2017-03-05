# PHP 基礎の練習問題

## 前提条件

PHP 5.6 以上が動作すること

## 準備（composer のインストール）

```
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```

## セットアップ方法

```
$ git clone https://github.com/nw-tsubo/php_basic.git
$ composer install
```

## 練習問題への回答（プログラム編集）

1. `src` ディレクトリ以下のファイルをエディタで開く
2. コメントに記述してある指示に従ってプログラミングする

## 練習問題の実行と採点

### 全ての問題を実行

```
$ vendor/bin/phpunit
```

### カテゴリ毎（ファイル毎）に問題を実行

```
$ vendor/bin/phpunit tests/xxxxxTest.php
```

### 採点結果

#### 全て正解の時

問題を実行した時に以下のように表示されれば全ての問題が正解です。

```
$ vendor/bin/phpunit

.............     13 / 13 (100%)

Time: 94 ms, Memory: 3.50MB

OK (13 tests, 16 assertions)
```

#### 不正解がある時

問題を実行した時に以下のように表示されたら不正解があります。全て正解するまで頑張りましょう。

```
$ vendor/bin/phpunit

FEEEFFFFEEEEE     13 / 13 (100%)

ここに色々エラー内容が表示される...

ERRORS!
Tests: 13, Assertions: 5, Errors: 8, Failures: 5.
```
