# Yii2 jQuery-loading

A wrapper around Yii2 jQuery-loading for using with AJAX requests.  

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```sh
$ php composer.phar require --prefer-dist loveorigami/yii2-jquery-loading "@dev"
$ php composer.phar require --prefer-dist bower-asset/jquery-loading "*"
```
or add
```
"loveorigami/yii2-jquery-loading": "@dev",
"bower-asset/jquery-loading": "*"
```
to the require section of your composer.json file.

## Usage

In view

```php
lo\widgets\loading\JqueryLoadingAsset::register($this);
```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'lo\widgets\loading\JqueryLoadingAsset'
	];
}
```

