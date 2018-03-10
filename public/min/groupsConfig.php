<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes.
 * http://yourdomain/min/builder/
 *
 * See https://github.com/mrclay/minify/blob/master/docs/CustomServer.wiki.md for other ideas
 */
return array(
    // 'testJs' => array('//minify/quick-test.js'),
    // 'testCss' => array('//minify/quick-test.css'),
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
    
//             ->prependStylesheet($this->basePath('css/vendor/fa-svg-with-js.css'))
//             ->prependStylesheet($this->basePath('css/vendor/normalize.css'))
//             ->prependStylesheet($this->basePath('css/main.css'))
//             ->prependStylesheet($this->basePath('css/vendor/bootstrap-theme.min.css'))
//             ->prependStylesheet($this->basePath('css/vendor/bootstrap.min.css'))
    
//             ->prependFile($this->basePath('js/vendor/modernizr-3.5.0.min.js'))
//             ->prependFile($this->basePath('js/vendor/fontawesome-all.min.js'))
//             ->prependFile($this->basePath('js/vendor/bootstrap.min.js'))
//             ->prependFile($this->basePath('js/vendor/popper/popper.min.js'))
//             ->prependFile($this->basePath('js/vendor/jquery-3.2.1.min.js'))
    
    'css' => array(
        '//css/vendor/bootstrap.min.css',
        '//css/vendor/bootstrap-theme.min.css',
        '//css/vendor/normalize.css',
        '//css/vendor/fa-svg-with-js.css',
        '//css/main.css'
    ),
    
    'js' => array(
        '//js/vendor/jquery-3.2.1.min.js',
        '//js/vendor/popper/popper.min.js',
        '//js/vendor/bootstrap.min.js',
        '//js/vendor/fontawesome-all.min.js',
        '//js/vendor/modernizr-3.5.0.min.js'
    )
);
