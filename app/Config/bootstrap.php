<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models/', '/next/path/to/models/'),
 *     'Model/Behavior'            => array('/path/to/behaviors/', '/next/path/to/behaviors/'),
 *     'Model/Datasource'          => array('/path/to/datasources/', '/next/path/to/datasources/'),
 *     'Model/Datasource/Database' => array('/path/to/databases/', '/next/path/to/database/'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions/', '/next/path/to/sessions/'),
 *     'Controller'                => array('/path/to/controllers/', '/next/path/to/controllers/'),
 *     'Controller/Component'      => array('/path/to/components/', '/next/path/to/components/'),
 *     'Controller/Component/Auth' => array('/path/to/auths/', '/next/path/to/auths/'),
 *     'Controller/Component/Acl'  => array('/path/to/acls/', '/next/path/to/acls/'),
 *     'View'                      => array('/path/to/views/', '/next/path/to/views/'),
 *     'View/Helper'               => array('/path/to/helpers/', '/next/path/to/helpers/'),
 *     'Console'                   => array('/path/to/consoles/', '/next/path/to/consoles/'),
 *     'Console/Command'           => array('/path/to/commands/', '/next/path/to/commands/'),
 *     'Console/Command/Task'      => array('/path/to/tasks/', '/next/path/to/tasks/'),
 *     'Lib'                       => array('/path/to/libs/', '/next/path/to/libs/'),
 *     'Locale'                    => array('/path/to/locales/', '/next/path/to/locales/'),
 *     'Vendor'                    => array('/path/to/vendors/', '/next/path/to/vendors/'),
 *     'Plugin'                    => array('/path/to/plugins/', '/next/path/to/plugins/'),
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */

/**
 * You can attach event listeners to the request lifecycle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));

/**
 * File destinations
 */
define("FILE_SCROLL", '/img/parallax-slider');
define("FILE_EMP", '/img/employees');
define("FILE_PRO", '/img/products');
define("FILE_ADS", '/img/ads');
define("FILE_TEAM", '/img/teams');

/**
 * PayPal
 */
//define("PAYPALID", 'SuOgVGBpq1mZektCRSCWKw0GPfOPFza9ZCLdwTRwTkF3VESCXeROWGsrEh0');
//define("PAYPALHOST", 'www.sandbox.paypal.com');
//define("PAYPALBUTTONID", 'S8M7S6CBHAGTU');
define("PAYPALID", 'rm2AUD27c_X68lcYxer0BFxMZAiEpv2rV6VblVL5j8eaHqS5pvMRB-O5poW');
define("PAYPALHOST", 'www.paypal.com');
define("PAYPALBUTTONID", 'N872ZJEVC5ZYG');

/**
 * icons
 */
Configure::write('icons', array(
	'ico-glass'	=> 'glass',
	'ico-leaf'	=> 'leaf',
	'ico-dog'	=> 'dog',
	'ico-user'	=> 'user',
	'ico-girl'	=> 'girl',
	'ico-car'	=> 'car',
	'ico-user-add'	=> 'user-add',
	'ico-user-remove'	=> 'user-remove',
	'ico-film'	=> 'film',
	'ico-magic'	=> 'magic',
	'ico-envelope'	=> 'envelope',
	'ico-camera'	=> 'camera',
	'ico-heart'	=> 'heart',
	'ico-beach-umbrella'	=> 'beach-umbrella',
	'ico-train'	=> 'train',
	'ico-print'	=> 'print',
	'ico-bin'	=> 'bin',
	'ico-music'	=> 'music',
	'ico-note'	=> 'note',
	'ico-cogwheel'	=> 'cogwheel',
	'ico-home'	=> 'home',
	'ico-snowflake'	=> 'snowflake',
	'ico-fire'	=> 'fire',
	'ico-cogwheels'	=> 'cogwheels',
	'ico-parents'	=> 'parents',
	'ico-binoculars'	=> 'binoculars',
	'ico-road'	=> 'road',
	'ico-search'	=> 'search',
	'ico-cars'	=> 'cars',
	'ico-notes-2'	=> 'notes-2',
	'ico-pencil'	=> 'pencil',
	'ico-bus'	=> 'bus',
	'ico-wifi-alt'	=> 'wifi-alt',
	'ico-luggage'	=> 'luggage',
	'ico-old-man'	=> 'old-man',
	'ico-woman'	=> 'woman',
	'ico-file'	=> 'file',
	'ico-credit'	=> 'credit',
	'ico-airplane'	=> 'airplane',
	'ico-notes'	=> 'notes',
	'ico-stats'	=> 'stats',
	'ico-charts'	=> 'charts',
	'ico-pie-chart'	=> 'pie-chart',
	'ico-group'	=> 'group',
	'ico-keys'	=> 'keys',
	'ico-calendar'	=> 'calendar',
	'ico-router'	=> 'router',
	'ico-camera-small'	=> 'camera-small',
	'ico-dislikes'	=> 'dislikes',
	'ico-star'	=> 'star',
	'ico-link'	=> 'link',
	'ico-eye-open'	=> 'eye-open',
	'ico-eye-close'	=> 'eye-close',
	'ico-alarm'	=> 'alarm',
	'ico-clock'	=> 'clock',
	'ico-stopwatch'	=> 'stopwatch',
	'ico-projector'	=> 'projector',
	'ico-history'	=> 'history',
	'ico-truck'	=> 'truck',
	'ico-cargo'	=> 'cargo',
	'ico-compass'	=> 'compass',
	'ico-keynote'	=> 'keynote',
	'ico-attach'	=> 'attach',
	'ico-power'	=> 'power',
	'ico-lightbulb'	=> 'lightbulb',
	'ico-tag'	=> 'tag',
	'ico-tags'	=> 'tags',
	'ico-cleaning'	=> 'cleaning',
	'ico-ruller'	=> 'ruller',
	'ico-gift'	=> 'gift',
	'ico-umbrella'	=> 'umbrella',
	'ico-book'	=> 'book',
	'ico-bookmark'	=> 'bookmark',
	'ico-signal-alt'	=> 'signal-alt',
	'ico-cup'	=> 'cup',
	'ico-stroller'	=> 'stroller',
	'ico-headphones'	=> 'headphones',
	'ico-headset'	=> 'headset',
	'ico-warning-sign'	=> 'warning-sign',
	'ico-signal'	=> 'signal',
	'ico-retweet'	=> 'retweet',
	'ico-refresh'	=> 'refresh',
	'ico-roundabout'	=> 'roundabout',
	'ico-random'	=> 'random',
	'ico-heat'	=> 'heat',
	'ico-repeat'	=> 'repeat',
	'ico-display'	=> 'display',
	'ico-log-book'	=> 'log-book',
	'ico-adress-book'	=> 'adress-book',
	'ico-magnet'	=> 'magnet',
	'ico-table'	=> 'table',
	'ico-adjust'	=> 'adjust',
	'ico-tint'	=> 'tint',
	'ico-crop'	=> 'crop',
	'ico-vector-path-square'	=> 'vector-path-square',
	'ico-vector-path-circle'	=> 'vector-path-circle',
	'ico-vector-path-polygon'	=> 'vector-path-polygon',
	'ico-vector-path-line'	=> 'vector-path-line',
	'ico-vector-path-curve'	=> 'vector-path-curve',
	'ico-vector-path-all'	=> 'vector-path-all',
	'ico-font'	=> 'font',
	'ico-italic'	=> 'italic',
	'ico-bold'	=> 'bold',
	'ico-text-underline'	=> 'text-underline',
	'ico-text-strike'	=> 'text-strike',
	'ico-text-height'	=> 'text-height',
	'ico-text-width'	=> 'text-width',
	'ico-text-resize'	=> 'text-resize',
	'ico-left-indent'	=> 'left-indent',
	'ico-right-indent'	=> 'right-indent',
	'ico-align-left'	=> 'align-left',
	'ico-align-center'	=> 'align-center',
	'ico-align-right'	=> 'align-right',
	'ico-justify'	=> 'justify',
	'ico-list'	=> 'list',
	'ico-text-smaller'	=> 'text-smaller',
	'ico-text-bugger'	=> 'text-bugger',
	'ico-embed'	=> 'embed',
	'ico-embed-close'	=> 'embed-close',
	'ico-adjust-alt'	=> 'adjust-alt',
	'ico-message-full'	=> 'message-full',
	'ico-message-empty'	=> 'message-empty',
	'ico-message-in'	=> 'message-in',
	'ico-message-out'	=> 'message-out',
	'ico-message-plus'	=> 'message-plus',
	'ico-message-minus'	=> 'message-minus',
	'ico-message-ban'	=> 'message-ban',
	'ico-message-flag'	=> 'message-flag',
	'ico-message-lock'	=> 'message-lock',
	'ico-message-new'	=> 'message-new',
	'ico-inbox'	=> 'inbox',
	'ico-inbox-plus'	=> 'inbox-plus',
	'ico-inbox-minus'	=> 'inbox-minus',
	'ico-inbox-lock'	=> 'inbox-lock',
	'ico-inbox-in'	=> 'inbox-in',
	'ico-inbox-out'	=> 'inbox-out',
	'ico-computer-locked'	=> 'computer-locked',
	'ico-computer-service'	=> 'computer-service',
	'ico-computer-process'	=> 'computer-process',
	'ico-phone'	=> 'phone',
	'ico-database-lock'	=> 'database-lock',
	'ico-database-plus'	=> 'database-plus',
	'ico-database-minus'	=> 'database-minus',
	'ico-database-ban'	=> 'database-ban',
	'ico-folder-open'	=> 'folder-open',
	'ico-folder-plus'	=> 'folder-plus',
	'ico-folder-minus'	=> 'folder-minus',
	'ico-folder-lock'	=> 'folder-lock',
	'ico-folder-flag'	=> 'folder-flag',
	'ico-folder-new'	=> 'folder-new',
	'ico-check'	=> 'check',
	'ico-edit'	=> 'edit',
	'ico-new-window'	=> 'new-window',
	'ico-more-windows'	=> 'more-windows',
	'ico-show-big-thumbnails'	=> 'show-big-thumbnails',
	'ico-show-thumbnails'	=> 'show-thumbnails',
	'ico-show-thumbnails-lines'	=> 'show-thumbnails-lines',
	'ico-show-lines'	=> 'show-lines',
	'ico-playlist'	=> 'playlist',
	'ico-picture'	=> 'picture',
	'ico-imac'	=> 'imac',
	'ico-macbook'	=> 'macbook',
	'ico-ipad'	=> 'ipad',
	'ico-iphone'	=> 'iphone',
	'ico-iphone-transfer'	=> 'iphone-transfer',
	'ico-iphone-exchange'	=> 'iphone-exchange',
	'ico-ipod'	=> 'ipod',
	'ico-ipod-shuffle'	=> 'ipod-shuffle',
	'ico-ear-plugs'	=> 'ear-plugs',
	'ico-albums'	=> 'albums',
	'ico-step-backward'	=> 'step-backward',
	'ico-fast-backward'	=> 'fast-backward',
	'ico-rewind'	=> 'rewind',
	'ico-play'	=> 'play',
	'ico-pause'	=> 'pause',
	'ico-stop'	=> 'stop',
	'ico-forward'	=> 'forward',
	'ico-fast-forward'	=> 'fast-forward',
	'ico-step-forward'	=> 'step-forward',
	'ico-eject'	=> 'eject',
	'ico-facetime-video'	=> 'facetime-video',
	'ico-download-alt'	=> 'download-alt',
	'ico-mute'	=> 'mute',
	'ico-volume-up'	=> 'volume-up',
	'ico-volume-down'	=> 'volume-down',
	'ico-screenshot'	=> 'screenshot',
	'ico-move'	=> 'move',
	'ico-more'	=> 'more',
	'ico-brightness-reduce'	=> 'brightness-reduce',
	'ico-brightness-increase'	=> 'brightness-increase',
	'ico-circle-plus'	=> 'circle-plus',
	'ico-circle-minus'	=> 'circle-minus',
	'ico-circle-remove'	=> 'circle-remove',
	'ico-circle-ok'	=> 'circle-ok',
	'ico-circle-question-mark'	=> 'circle-question-mark',
	'ico-circle-info'	=> 'circle-info',
	'ico-circle-exclamation-mark'	=> 'circle-exclamation-mark',
	'ico-remove'	=> 'remove',
	'ico-ok'	=> 'ok',
	'ico-ban'	=> 'ban',
	'ico-download'	=> 'download',
	'ico-upload'	=> 'upload',
	'ico-shopping-cart'	=> 'shopping-cart',
	'ico-lock'	=> 'lock',
	'ico-unlock'	=> 'unlock',
	'ico-electricity'	=> 'electricity',
	'ico-ok-2'	=> 'ok-2',
	'ico-remove-2'	=> 'remove-2',
	'ico-cart-out'	=> 'cart-out',
	'ico-cart-in'	=> 'cart-in',
	'ico-left-arrow'	=> 'left-arrow',
	'ico-right-arrow'	=> 'right-arrow',
	'ico-down-arrow'	=> 'down-arrow',
	'ico-up-arrow'	=> 'up-arrow',
	'ico-resize-small'	=> 'resize-small',
	'ico-resize-full'	=> 'resize-full',
	'ico-circle-arrow-left'	=> 'circle-arrow-left',
	'ico-circle-arrow-right'	=> 'circle-arrow-right',
	'ico-circle-arrow-top'	=> 'circle-arrow-top',
	'ico-circle-arrow-down'	=> 'circle-arrow-down',
	'ico-play-button'	=> 'play-button',
	'ico-unshare'	=> 'unshare',
	'ico-share'	=> 'share',
	'ico-thin-right-arrow'	=> 'thin-right-arrow',
	'ico-thin-left-arrow'	=> 'thin-left-arrow',
	'ico-bluetooth'	=> 'bluetooth',
	'ico-euro'	=> 'euro',
	'ico-usd'	=> 'usd',
	'ico-bp'	=> 'bp',
	'ico-retweet-2'	=> 'retweet-2',
	'ico-moon'	=> 'moon',
	'ico-sun'	=> 'sun',
	'ico-cloud'	=> 'cloud',
	'ico-direction'	=> 'direction',
	'ico-brush'	=> 'brush',
	'ico-pen'	=> 'pen',
	'ico-zoom-in'	=> 'zoom-in',
	'ico-zoom-out'	=> 'zoom-out',
	'ico-pin'	=> 'pin',
	'ico-riflescope'	=> 'riflescope',
	'ico-rotation-lock'	=> 'rotation-lock',
	'ico-flash'	=> 'flash',
	'ico-google-maps'	=> 'google-maps',
	'ico-anchor'	=> 'anchor',
	'ico-conversation'	=> 'conversation',
	'ico-chat'	=> 'chat',
	'ico-male'	=> 'male',
	'ico-female'	=> 'female',
	'ico-asterisk'	=> 'asterisk',
	'ico-divide'	=> 'divide',
	'ico-snorkel-diving'	=> 'snorkel-diving',
	'ico-scuba-diving'	=> 'scuba-diving',
	'ico-oxygen-vottle'	=> 'oxygen-vottle',
	'ico-fins'	=> 'fins',
	'ico-fishes'	=> 'fishes',
	'ico-boat'	=> 'boat',
	'ico-delete-point'	=> 'delete-point',
	'ico-sheriffs-star'	=> 'sheriffs-star',
	'ico-qrcode'	=> 'qrcode',
	'ico-barcode'	=> 'barcode',
	'ico-pool'	=> 'pool',
	'ico-buoy'	=> 'buoy',
	'ico-spade'	=> 'spade',
	'ico-bank'	=> 'bank',
	'ico-vcard'	=> 'vcard',
	'ico-electircal-plug'	=> 'electircal-plug',
	'ico-flag'	=> 'flag',
	'ico-credit-card'	=> 'credit-card',
	'ico-keyboard-wirelsss'	=> 'keyboard-wirelsss',
	'ico-keyboard-wired'	=> 'keyboard-wired',
	'ico-shield'	=> 'shield',
	'ico-ring'	=> 'ring',
	'ico-cake'	=> 'cake',
	'ico-drink'	=> 'drink',
	'ico-beer'	=> 'beer',
	'ico-fast-food'	=> 'fast-food',
	'ico-cutlery'	=> 'cutlery',
	'ico-pizza'	=> 'pizza',
	'ico-birthday-cake'	=> 'birthday-cake',
	'ico-tablet'	=> 'tablet',
	'ico-settings'	=> 'settings',
	'ico-bullets'	=> 'bullets',
	'ico-cardio'	=> 'cardio',
	'ico-t-shirt'	=> 't-shirt',
	'ico-pants'	=> 'pants',
	'ico-sweater'	=> 'sweater',
	'ico-fabric'	=> 'fabric',
	'ico-leather'	=> 'leather',
	'ico-scissors'	=> 'scissors',
	'ico-podium'	=> 'podium',
	'ico-skull'	=> 'skull',
	'ico-celebration'	=> 'celebration',
	'ico-tea-kettle'	=> 'tea-kettle',
	'ico-french-press'	=> 'french-press',
	'ico-coffe-cup'	=> 'coffe-cup',
	'ico-pot'	=> 'pot',
	'ico-grater'	=> 'grater',
	'ico-kettle'	=> 'kettle',
	'ico-hospital'	=> 'hospital',
	'ico-hospital-h'	=> 'hospital-h',
	'ico-microphone'	=> 'microphone',
	'ico-webcam'	=> 'webcam',
	'ico-temple-church'	=> 'temple-church',
	'ico-temple-islam'	=> 'temple-islam',
	'ico-temple-hindu'	=> 'temple-hindu',
	'ico-temple-buddhist'	=> 'temple-buddhist',
	'ico-electrical-socket-eu'	=> 'electrical-socket-eu',
	'ico-electrical-socket-us'	=> 'electrical-socket-us',
	'ico-bomb'	=> 'bomb',
	'ico-comments'	=> 'comments',
	'ico-flower'	=> 'flower',
	'ico-baseball'	=> 'baseball',
	'ico-rugby'	=> 'rugby',
	'ico-ax'	=> 'ax',
	'ico-table-tennis'	=> 'table-tennis',
	'ico-bowling'	=> 'bowling',
	'ico-volleyball'	=> 'volleyball',
	'ico-tree-conifer'	=> 'tree-conifer',
	'ico-tree-deciduous'	=> 'tree-deciduous',
	'ico-more-items'	=> 'more-items',
	'ico-sort'	=> 'sort',
	'ico-filter'	=> 'filter',
	'ico-gamepad'	=> 'gamepad',
	'ico-playing-dices'	=> 'playing-dices',
	'ico-calculator'	=> 'calculator',
	'ico-tie'	=> 'tie',
	'ico-wallet'	=> 'wallet',
	'ico-share'	=> 'share',
	'ico-sampler'	=> 'sampler',
	'ico-piano'	=> 'piano',
	'ico-web-browser'	=> 'web-browser',
	'ico-blog'	=> 'blog',
	'ico-dashboard'	=> 'dashboard',
	'ico-certificate'	=> 'certificate',
	'ico-bell'	=> 'bell',
	'ico-candle'	=> 'candle',
	'ico-pin-classic'	=> 'pin-classic',
	'ico-iphone-shake'	=> 'iphone-shake',
	'ico-pin-flag'	=> 'pin-flag',
	'ico-turtle'	=> 'turtle',
	'ico-rabbit'	=> 'rabbit',
	'ico-globe'	=> 'globe',
	'ico-briefcase'	=> 'briefcase',
	'ico-hdd'	=> 'hdd',
	'ico-thumbs-up'	=> 'thumbs-up',
	'ico-thumbs-down'	=> 'thumbs-down',
	'ico-hand-right'	=> 'hand-right',
	'ico-hand-left'	=> 'hand-left',
	'ico-hand-up'	=> 'hand-up',
	'ico-hand-down'	=> 'hand-down',
	'ico-fullscreen'	=> 'fullscreen',
	'ico-shopping-bag'	=> 'shopping-bag',
	'ico-book-open'	=> 'book-open',
	'ico-nameplate'	=> 'nameplate',
	'ico-nameplate-alt'	=> 'nameplate-alt',
	'ico-vases'	=> 'vases',
	'ico-announcement'	=> 'announcement',
	'ico-dumbbell'	=> 'dumbbell',
	'ico-suitcase'	=> 'suitcase',
	'ico-file-import'	=> 'file-import',
	'ico-file-export'	=> 'file-export'
));

/**
 * social mediums
 */
Configure::write('socials', array(
	'aim'	=> 'aim',
	'apple'	=> 'apple',
	'behance'	=> 'behance',
	'blogger'	=> 'blogger',
	'cargo'	=> 'cargo',
	'delicious'	=> 'delicious',
	'deviantart'	=> 'deviantart',
	'digg'	=> 'digg',
	'dopplr'	=> 'dopplr',
	'dribbble'	=> 'dribbble',
	'ember'	=> 'ember',
	'evernote'	=> 'evernote',
	'facebook'	=> 'facebook',
	'flickr'	=> 'flickr',
	'forrst'	=> 'forrst',
	'github'	=> 'github',
	'google'	=> 'google',
	'googleplus'	=> 'googleplus',
	'gowalla'	=> 'gowalla',
	'grooveshark'	=> 'grooveshark',
	'html5'	=> 'html5',
	'icloud'	=> 'icloud',
	'lastfm'	=> 'lastfm',
	'linkedin'	=> 'linkedin',
	'metacafe'	=> 'metacafe',
	'mixx'	=> 'mixx',
	'myspace'	=> 'myspace',
	'netvibes'	=> 'netvibes',
	'newsvine'	=> 'newsvine',
	'orkut'	=> 'orkut',
	'paypal'	=> 'paypal',
	'picasa'	=> 'picasa',
	'pinterest'	=> 'pinterest',
	'plurk'	=> 'plurk',
	'posterous'	=> 'posterous',
	'reddit'	=> 'reddit',
	'rss'	=> 'rss',
	'skype'	=> 'skype',
	'stumbleupon'	=> 'stumbleupon',
	'technorati'	=> 'technorati',
	'tumblr'	=> 'tumblr',
	'twitter'	=> 'twitter',
	'vimeo'	=> 'vimeo',
	'wordpress'	=> 'wordpress',
	'yahoo'	=> 'yahoo',
	'yelp'	=> 'yelp',
	'youtube'	=> 'youtube',
	'zerply'	=> 'zerply',
	'zootool'	=> 'zootool',
));
