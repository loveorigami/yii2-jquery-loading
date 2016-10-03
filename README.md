# Yii2 jQuery-loading
[![Latest Stable Version](https://poser.pugx.org/loveorigami/yii2-jquery-loading/v/stable)](https://packagist.org/packages/loveorigami/yii2-jquery-loading) 
[![Total Downloads](https://poser.pugx.org/loveorigami/yii2-jquery-loading/downloads)](https://packagist.org/packages/loveorigami/yii2-jquery-loading)
[![License](https://poser.pugx.org/loveorigami/yii2-jquery-loading/license)](https://packagist.org/packages/loveorigami/yii2-jquery-loading)

A wrapper around Yii2 [jQuery-loading](https://github.com/CarlosBonetti/jquery-loading) for using with AJAX requests.  

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```sh
$ php composer.phar require --prefer-dist loveorigami/yii2-jquery-loading "@dev"
```
or add
```
"loveorigami/yii2-jquery-loading": "@dev"
```
to the require section of your composer.json file.

## Usage

In layout

```php
echo lo\widgets\loading\JqueryLoading::widget(isset($this->params['loading']) ? $this->params['loading'] : []);
```

In view

```php
$this->params['loading'] = [
    'element' => 'body', // or #my-id_element, or .my-class_element
    'options' => [
        'stoppable' => true,
        'theme' => 'dark',
        'message' => 'Working...'
        
        // and more here http://carlosbonetti.github.io/jquery-loading
    ]
]
```

