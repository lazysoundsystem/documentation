<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Apps Documentation</title>
    <?php include('head.php'); ?>
    <link href="assets/css/simple-sidebar.css" type="text/css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="header-bar">
      <div class="col-xs-2 col-sm-2">
        <a href="#menu-toggle" class="pull-left" id="menu-toggle"><i class="fa fa-bars fa-2x"></i></a>
      </div>
      <div class="col-xs-10 col-sm-10" id="title">
        <h1 class="pull-right" style="color:white;">
          <a href="index.html">Home</a> -> Apps Documentation
        </h1>
      </div>
    </div>

    <div id="wrapper">
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="index.html">HOME</a></li>
          <div id="box-for-genereted-scrollnav" class="nav-block">
          </div>
          <br><br><br><br><br>
        </ul>
      </div>

      <div id="page-content-wrapper">
        <div id="top" class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="main">
                <article class="post__article">

                  <!-- 0.0 EMALSYS  -->
                  <div class="text-center">
                    <br>
                    <img style="width: 160px;" src="assets/img/rw-logo-image-large.png" alt="Relief Applications">
                  </div>
                  <hr>
                  <br>

                  <p class="text-center">
                    Find answers in the left hand side menu and the FAQ below
                    <br>
                    For any concern or request for a training (Skype) feel free to contact us at <a href="mailto:contact@reliefapplications.org">contact@reliefapplications.org</a>
                    <br>
                    Or at <b><span style="color:grey;">0039 0688936512</b> (office hours Central European Time Zone)</span></p>
                  </p>
                  <br> <hr> <br>

                  <h2 id="ionic-2---rwapps-pass">Password</h2>
                  <ul>
                    <li>
                      This documentation is accessible online through the credentials reliefweb/reliefweb
                    </li>
                  </ul>
                  <h2 id="ionic-2---rwapps">Convention</h2>
                  <ul>
                    <li>
                      Ionic 2 uses kebob-casing for file names (my-about-page.html) and css classes (.my-about-page), and uses PascalCasing for JavaScript classes in ES6/TypeScript (MyAboutPage)
                    </li>
                    <p>see: http://ionicframework.com/docs/v2/cli/generate/</p>
                  </ul>
                  <ul>
                    <li>
                      <p>for SQLite all properties with _ and interface attached to SQLite: use camelCase</p>
                    </li>
                    <li>
                      Angular2 style Guide: https://angular.io/styleguide
                      <ul>
                        <li>files and folder: feature.type.ts e.g.: app/heroes/hero-list.service.ts</li>
                      </ul>
                    </li>
                    <li>
                      types: .service, .pipe
                      <ul>
                        <li>components: hero-list.ts -&gt; export class HeroListComponent</li>
                        <li>Constants: CAPITAL <code>export const VILLAINS_URL = 'api/villains'</code></li>
                        <li>
                          Interface:
                          <ul>
                            <li>name: UpperCamelCase</li>
                            <li>variable: lowerCamelCase</li>
                          </ul>
                        </li>
                        <li>Properties and Methods: lower camel case</li>
                        <li>import: Do leave one whitespace character inside of the import statements' curly braces</li>
                      </ul>
                    </li>
                    <li>
                      ts function lowerCamel
                      <ul>
                        <li>import { ComponentName }</li>
                        <li>Switch case should follow this format : http://www.w3schools.com/js/js_switch.asp</li>
                      </ul>
                    </li>
                  </ul>

                  <h2 id="resources">Resources</h2>
                  <h3 class="subsection" id="ionic2">Ionic2</h3>
                  <ul>
                    <li><a href="http://ionicframework.com/docs/v2/components/#overview">Components</a></li>
                    <li>Ionic2 framework: http://ionicframework.com/docs/v2/getting-started/installation/</li>
                    <li>Ionic.io (Ionic tools): http://docs.ionic.io/</li>
                    <li>GitterRoom: https://gitter.im/driftyco/ionic-io-testers</li>
                    <li>to Start a new projet: <code>ionic start app blank --v2 --ts</code> use .ts!</li>
                  </ul>

                  <h3 class="subsection" id="angularjs-2">AngularJS 2</h3>
                  <ul>
                    <li><a href="https://angular.io/">Official Doc</a></li>
                    <li><a href="https://github.com/johnpapa/angular-styleguide/blob/master/a2/README.md">Style Guide</a></li>
                  </ul>

                  <h3 class="subsection" id="android-sdk">Android SDK</h3>
                  <ul>
                    <li>Download the <a href="http://developer.android.com/sdk/index.html#Other">SDK Tools only</a></li>
                    <li>Unzip it and go into <code>android-sdk-linux\tools\</code></li>
                    <li>Run <code>./android</code> and the Android SDK Manager will open</li>
                    <li>Install all the following</li>
                    <li>Tools Folder</li>
                    <li>Android 6.0 (API23)</li>
                    <li>Android 5.1.1 (API22)</li>
                    <li>Extra : 'Android Support Repository', 'Android Support Library', 'Google Play services', 'Google Repository'</li>
                    <li>Then you can go again to the <code>tools</code> folder and type <code>./android</code> to open the Android SDK Manager to update things.</li>
                  </ul>

                  <h3 class="subsection" id="api-http">API / http</h3>
                  <ul>
                    <li> <a href="http://apidoc.rwlabs.org/">ReliefWeb API Doc</a></li>
                    <li><a href="http://reliefweb.int/help/api/advanced">Advanced ReliefWeb API Doc</a></li>
                  </ul>

                  <p>URL</p>
                  <ul>
                    <li>Job : <a href="http://api.reliefweb.int/v1/jobs/?appname=rw-app-jobs">http://api.reliefweb.int/v1/jobs/?appname=rw-app-jobs</a></li>
                    <li>Headline : <a href="http://api.reliefweb.int/v1/reports/?appname=rw-app-headlines">http://api.reliefweb.int/v1/reports/?appname=rw-app-headlines</a></li>
                    <li>Video : <a href="https://developers.google.com/youtube/v3/">"https://developers.google.com/youtube/v3/</a> (Youtube API)</li>
                  </ul>

                  <h2 id="installation">Installation</h2>
                  <h3 class="subsection" id="basics">Basics</h3>
                  <ul>
                    <li>
                      Install <a href="https://nodejs.org/en/">Node</a>
                      <ul>
                        <li><code>node -v</code> to check if it's installed</li>
                        <li>If not, go <a href="https://nodejs.org/en/">here</a> and install it (v4 is good)</li>
                      </ul>
                    </li>
                    <li>
                      Update <a href="https://www.npmjs.com/">NPM</a>
                      <ul>
                        <li><code>sudo npm install npm -g</code></li>
                      </ul>
                    </li>
                    <li>
                      Install <a href="http://ionicframework.com/">Ionic</a>
                      <ul>
                        <li><code>sudo npm install -g ionic</code> to use ionic2</li>
                      </ul>
                    </li>
                  </ul>

                  <h3 class="subsection" id="get-the-project">Get the project</h3>
                  <h4 id="install-dependencies">Install Dependencies</h4>
                  <ul>
                    <li>NPM : <a href="https://docs.npmjs.com/">doc</a></li>
                    <li><code>rm -rf node_modules/</code> : delete files in node_modules</li>
                    <li><code>npm install</code> : install all dependencies present in package.json</li>
                    <li><code>npm install &lt;package_name&gt; --save</code> : install the package, <code>--save</code> is used to write the new dependency into package.json</li>
                    <li><code>npm update</code> : Update all packages present in the package.json</li>
                    <li><code>npm install -g jshint</code> : <code>-g</code> is used to install the package globally</li>
                    <li>
                      TYPING : <a href="https://github.com/typings/typings">doc</a>
                      <ul>
                        <li><code>npm install typings --global</code> : global install</li>
                      </ul>
                    </li>
                    <li>
                      Moment : <a href="https://github.com/moment/moment">doc</a>
                      <ul>
                        <li><code>typings install npm~moment --save</code> : install moment.js for a TS project</li>
                        <li><code>import * as moment from 'moment';</code> : import moment</li>
                        <li>Use <code>typings search moment</code> to get the one from NPM</li>
                      </ul>
                    </li>
                    <li>
                      Not to forget :
                      <ul>
                        <li><code>npm install -g cordova</code></li>
                        <li><code>npm install -g ios-sim</code></li>
                        <li><code>npm install cordova-common</code></li>
                        <li><code>npm install xcode</code></li>
                        <li><code>npm install ios-deploy</code></li>
                      </ul>
                    </li>
                  </ul>

                  <h3 class="subsection" id="manage-plugins">Manage Plugins</h3>
                  <h4 id="common-plugins">Common Plugins</h4>
                  <ul>
                    <li><code>ionic plugin add cordova-plugin-device</code></li>
                    <li><code>ionic plugin add cordova-plugin-console</code></li>
                    <li><code>ionic plugin add cordova-plugin-whitelist</code></li>
                    <li><code>ionic plugin add cordova-plugin-splashscreen</code></li>
                    <li><code>ionic plugin add cordova-plugin-statusbar</code></li>
                    <li><code>ionic plugin add ionic-plugin-keyboard</code></li>
                    <li><code>ionic plugin add cordova-plugin-x-socialsharing</code></li>
                    <li><code>ionic plugin add cordova-sqlite-storage</code></li>
                    <li><code>ionic plugin add cordova-plugin-google-analytics</code></li>
                    <li><code>ionic plugin add cordova-fabric-plugin --variable
                              FABRIC_API_KEY=f21f9de554075efb7a2615651c235221737064e1 --variable
                              FABRIC_API_SECRET=f569c1d98f4d3520d0a8849ad0ca9a6052cefe0249e05d89634a896abb92c6f5</code>
                    </li>
                  </ul>
                  <p>NB: to use google analytics import GoogleAnalytics from ionic-native in app.ts and in platform ready: GoogleAnalytics.startTrackerWithId(&quot;UA-50528110-2&quot;);</p>

                  <h4 id="jobs">Jobs</h4>
                  <ul>
                    <li><code>ionic plugin add cordova-plugin-geolocation</code></li>
                  </ul>

                  <h4 id="videos">Videos</h4>
                  <ul>
                    <li><code>ionic plugin add cordova-plugin-x-toast</code></li>
                    <li><code>ionic plugin add cordova-plugin-network-information</code></li>
                    <li><code>ionic plugin add cordova-plugin-inappbrowser</code></li>
                  </ul>

                  <h4 id="headlines">Headlines</h4>
                  <ul>
                    <li><code>ionic plugin add cordova-plugin-x-toast</code></li>
                    <li><code>ionic plugin add cordova-plugin-inappbrowser</code></li>
                  </ul>

                  <h4 id="crisis">Crisis</h4>
                  <ul>
                    <li><code>ionic plugin add cordova-plugin-email</code></li>
                    <li><code>ionic plugin add cordova-plugin-inappbrowser</code></li>
                    <li><code>ionic plugin add cordova-plugin-ios-longpress-fix</code></li>
                    <li><code>ionic plugin add cordova-plugin-ios-no-export-compliance</code></li>
                    <li><code>ionic plugin add cordova-plugin-networkactivityindicator</code></li>
                    <li><code>ionic plugin add cordova-plugin-spinner-dialog</code></li>
                  </ul>

                  <h2 id="code">Code</h2>
                  <h3 class="subsection" id="code-jobs">Jobs</h3>
                  <ul>
                    <li>Base Code repo: https://gitlab.com/RWapps/ReliefWeb_Jobs</li>
                    <li>api :
                      <ul>
                        <li>relief web :
                          <ul>
                            <li>http://api.reliefweb.int/v1/jobs?appname=rw-app-jobs</li>
                            <li>http://api.reliefweb.int/v1/sources?appname=rw-app-jobs</li>
                            <li>http://api.reliefweb.int/v1/countries?appname=rw-app-jobs</li>
                            <li>random resources or report with ids</li>
                          </ul>
                        </li>
                        <li>All select-multiple Search criteria are hardcoded: Experiences, Types, Career categories, Themes, Organization types</li>
                        <li>geoloc:
                          <ul>
                            <li>https://nominatim.openstreetmap.org/reverse</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <h3 class="subsection" id="code-videos">Videos</h3>
                  <ul>
                    <li>Base Code repo: https://gitlab.com/RWapps/ReliefWeb_Video</li>
                    <li>api   :
                      <ul>
                        <li>google youtube api :</li>
                        <li>https://www.googleapis.com/youtube/v3/  with key : AIzaSyCeRTnYTaQT0P2gONot2w3zSM5f0rrZyJY</li>
                        <li>random calls</li>
                      </ul>
                    </li>
                    <li>gists :
                      <ul>
                        <li>The Gist are pull from ReliefWeb server using a GO script (hosted on <a href="https://github.com/rwapps/video_gists" target="_blank">Github rwapps</a>) and push to the following GIST:</li>
                        <ul>
                          <li>theme : https://api.github.com/gists/41c8a9f38f177fcee358c4758f3f87ea</li>
                          <li>theme_curated : https://api.github.com/gists/b84cea60bddd963c50d333ca407c67a6</li>
                          <li>country : https://api.github.com/gists/d649065b527a558be67393c25447fe9d</li>
                          <li>country_curated : https://api.github.com/gists/da74e6f5700297b94577c060beab4b41</li>
                          <li>organisation : https://api.github.com/gists/cd7080a7d6ae35cd254bdd8c153abfb7</li>
                          <li>organisation_curated : https://api.github.com/gists/e064f05b566b5f8a12bc11f9590e14d1</li>
                          <li>(everything in https://github.com/rwapps/video_backups ?? ) - CHECK WITH @ANDY</li>
                        </ul>
                      </ul>
                    </li>
                  </ul>

                  <h3 class="subsection" id="code-headlines">Headlines</h3>
                  <ul>
                    <li>Base Code repo: https://gitlab.com/RWapps/Headlines</li>
                    <li>api :
                      <ul>
                        <li> relief web :
                          <ul>
                            <li>http://api.reliefweb.int/v1/reports</li>
                            <li>http://api.reliefweb.int/v1/disasters</li>
                            <li>http://api.reliefweb.int/v1/reports?appname=rw-app-headlines</li>
                            <li>http://api.reliefweb.int/v1/disasters?appname=rw-app-headlines</li>
                            <li>http://api.reliefweb.int/v1/countries?appname=rw-app-headlines</li>
                            <li>http://api.reliefweb.int/v1/sources?appname=rw-app-headlines</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>gists :
                      <ul>
                        <li>Most read over the last 7 days - asking for reports, ordered by pageviews and with sample size 'large' - see <a href="https://ga-dev-tools.appspot.com/query-explorer/?ids=ga%3A75062&start-date=2016-05-09&end-date=2016-05-11&metrics=ga%3Asessions%2Cga%3Apageviews%2Cga%3AsocialInteractions&dimensions=ga%3ApagePath%2Cga%3ApageTitle&sort=-ga%3Apageviews&filters=ga%3Adimension1%3D%3DReport&samplingLevel=HIGHER_PRECISION&max-results=5" target="_blank">Google Analytics Query</a>
                          <li>The GA query is pull using a GO script (hosted on <a href="https://github.com/rwapps/headlines_most_read" target="_blank">Github rwapps</a>) and push to a Gist: <a href="https://gist.githubusercontent.com/rwapps/679a617d4641152cfcb5ba4607aa5201/raw/most_read.json">https://gist.githubusercontent.com/rwapps/679a617d4641152cfcb5ba4607aa5201/raw/most_read.json</a></li>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!-- Crises -->
                  <h3 class="subsection" id="code-crisis">Crises and Americas</h3>
                  <span class="text-center"><img src="assets/img/crisis.jpg" class="img-responsive thumbnail"/></span>
                  <ul>
                    <li>Base Code repo: https://gitlab.com/RWapps/crisis-app</li>
                    <li>Base Code repo for americas : https://gitlab.com/RWapps/crisis-americas</li>
                    <li>api :
                      <ul>
                        <li>ReliefWeb:
                          <ul>
                            <li>http://api.reliefweb.int/v1/reports with random parameters</li>
                            <li>http://api.reliefweb.int/v1/disasters with random parameters</li>
                            <li>http://api.reliefweb.int/v1/jobs with random parameters</li>
                            <li>http://api.reliefweb.int/v1/sources with random parameters</li>
                          </ul>
                        </li>
                        <li>fts :
                          <ul>
                            <li>http://fts.unocha.org/api/v1/appeal/year/${currentYear}.json</li>
                            <li>http://fts.unocha.org/api/v1/appeal/country/${iso3}.json</li>
                            <li>http://fts.unocha.org/api/v1/cluster/appeal/${appeal}.json</li>
                            <li>http://fts.unocha.org/api/v1/funding.json?appeal=${appeal}&groupby=donor</li>
                          </ul>
                        </li>
                        <li>gists :
                          <ul>
                            <li>https://raw.githubusercontent.com/reliefweb/crisis-app-data/master/crisis.json</li>
                            <li>https://raw.githubusercontent.com/reliefweb/crisis-app-data-americas/master/crisis.json</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <!--<span class=""-->
                  <ul>
                    <li>Trello Board - cript to push to GITHUB - CHECK WITH @ANDY<br>
                      <code>https://trello.com/b/Pi9Bu1yL/rw-crisis-backend</code><br>
                      <code>https://api.trello.com/1/boards/57360e392f1eda63ff10d45e?lists=open&cards=open&fields=name,pos,des&card_fields=name,desc,pos,idList,labels,due&card_attachments=true&card_attachment_fields=name,url&key=3d37f50b1edaece54aaac012f155f82a&token=3ccad865514666d0d2ffecbde4440b5aaecc407f917928d534b6fe5954521a2a</code>
                    </li>
                      <li>ReliefWeb Reports
                        <br><code>http://api.reliefweb.int/v1/reports?appname=rw-app-crises&limit=50&offset=0&filter[operator]=AND&filter[conditions][0][field]=primary_country.iso3&filter[conditions][0][value][]=AFG&filter[conditions][1][operator]=OR&filter[conditions][1][conditions][0][operator]=OR&filter[conditions][1][conditions][0][field]=format.name&filter[conditions][1][conditions][1][field]=headline&filter[conditions][1][conditions][0][value][]=Situation+Report&filter[conditions][1][conditions][0][value][]=News+and+Press+Release&filter[conditions][1][conditions][0][value][]=Map&filter[conditions][1][conditions][0][value][]=Infographic&filter[conditions][1][conditions][0][value][]=Analysis&fields[include][]=primary_country&fields[include][]=url&fields[include][]=url_alias&fields[include][]=title&fields[include][]=headline&fields[include][]=image&fields[include][]=source&fields[include][]=date&fields[include][]=format&fields[include][]=file&fields[include][]=body&fields[include][]=body-html&fields[include][]=origin&sort[]=date:desc&sort[]=title:asc</code>
                      </li>
                      <li>ReliefWeb Disasters
                        <br><code>http://api.rwlabs.org/v1/disasters?appname=rw-app-crises&limit=3&offset=0&filter[operator]=AND&filter[conditions][0][field]=primary_country.iso3&filter[conditions][0][value][]=AFG&filter[conditions][1][field]=status&filter[conditions][1][value][]=current&filter[conditions][1][value][]=alert&filter[conditions][1][operator]=OR&fields[include][]=url&fields[include][]=name&fields[include][]=description&fields[include][]=description-html&fields[include][]=type&fields[include][]=date&fields[include][]=status&fields[include][]=primary_country&sort[]=date:desc&sort[]=name:asc</code><br>
                      </li>
                      <li>ReliefWeb Sources
                        <br><code>http://api.reliefweb.int/v1/sources?filter[operator]=AND&filter[conditions][0][field]=content_type&filter[conditions][0][value][]=report&filter[conditions][1][field]=logo&fields[include][]=logo.url&limit=1000"</code>
                      </li>
                      <li>ReliefWeb Jobs Count
                        <br><code>http://api.reliefweb.int/v1/jobs?appname=rw-app-crises&limit=0&filter[operator]=AND&filter[conditions][0][field]=country.iso3&filter[conditions][0][value][]=CMR&filter[conditions][1][field]=status&filter[conditions][1][value][]=published&sort[]=date:desc</code><br>
                      </li>
                    </ul>

                    <h2 id="run-and-test">Run and Test</h2>
                    <h3 class="subsection" id="ios">iOS</h3>
                    <ul>
                      <li><code>ionic platform add ios</code></li>
                      <li><code>ionic build ios</code></li>
                      <li><code>ionic emulate ios</code></li>
                      <li><code>ionic emulate ios --liverelaod --consolelogs --serverlogs</code></li>
                      <li><code>ionic run ios</code></li>
                      <li>The magic CLI : <code>ionic run ios --livereload --consolelogs --serverlogs --emulator --address localhost</code></li>
                    </ul>

                    <h3 class="subsection" id="android">Android</h3>
                    <ul>
                      <li><code>ionic platform add android</code></li>
                      <li><code>ionic build android</code></li>
                      <li><code>ionic run android</code></li>
                    </ul>

                    <h2 id="deploy">Deploy</h2>
                    <h3  class="subsection" id="build-android">Build Android</h3>
                    <ol style="list-style-type: decimal">
                      <li>Verify API version in config.xml <code>&lt;preference name=&quot;android-minSdkVersion&quot;value=&quot;19&quot;/&gt;</code></li>
                      <li>run shell script  <code>deployapp.sh</code> NB: add cross-walk and <code>deployapp.sh -x86</code> and <code>deployapp.sh -xarmv7</code></li>
                    </ol>

                    <h4>Passphrases (appname.keystore)</h4>
                    <ul>
                      <li>JobReliefWeb : <code>YzEyODY5OWIwNzE0Njc3NzgzZmVkNDE5</code></li>
                      <li>HeadlinesReliefWeb : <code>NzljZTMzZGE2YTcyMjI2NzAzZDMxMmJm</code></li>
                      <li>VideoReliefWeb : <code>NzdkYmVjYWFiZmUyNzg1NGQ2YmU4MzM3</code></li>
                      <li>rw-crises : <code>reliefweb</code></li>
                      <li>rw-crises-americas : <code>reliefweb</code></li>
                    </ul>

                    <h3  class="subsection" id="build-ios">Build iOS</h3>
                    <ol style="list-style-type: decimal">
                      <li>Start by <code>ionic serve</code> NB: <code>ionic build ios</code> uses the www folder (updated only with a serve)</li>
                      <li><code>ionic build ios</code></li>
                      <li>Open jobs_relief_web/platforms/ios/RW_jobs.xcodeproj (with x-code 7.2 minimum)</li>
                      <li>Select target -&gt; Build settings update code signing</li>
                      <li>Check:</li>
                    </ol>
                    <ul>
                      <li>General identity</li>
                      <li>Build settings/code-sigining/provisioning-profile (debug &amp; release)</li>
                      <li>
                        Open Fabric (mac app):
                        <ul>
                          <li>new app -&gt; select project</li>
                          <li>install crashanalytics (get the script build phase)</li>
                        </ul>
                      </li>
                      <li>x-code: Build phase Run script: <code>./Fabric.framework/run3fdf3749059be7a91351562adb583e129a3d38d45dca9c33f191bf01e42756cad77d03ecf0b5a6a6703821dbb5136a8a8ae43e66</code></li>
                      <li>x-code: slect target : Generic iOS Device</li>
                      <li>Product -&gt; build</li>
                      <li>Product -&gt; clean</li>
                      <li>Product -&gt; archive</li>
                    </ul>

                    <h3  class="subsection" id="itunes-connect">Itunes connect</h3>
                    <ol style="list-style-type: decimal">
                      <li><a href="https://developer.apple.com/account/ios/profile/">Create certificate</a></li>
                      <li><a href="https://developer.apple.com/account/ios/profile/">Create appid</a> - RW Jobs</li>
                      <li>Create 2 provisioning profiles (one dev one distribution RW Jobs App Store</li>
                      <li>Build app (ionic build ios - see above Build iOS)</li>
                      <li>Validate</li>
                      <li>Upload to App Store</li>
                      <li>Go to <a href="https://itunesconnect.apple.com/WebObjects/iTunesConnect.woa/">iTunesConnect</a> and select the app</li>
                    </ol>
                  </article>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollNav.min.js"></script>
    <script>
      $('.post__article').scrollNav({

        sections: 'h2',
        subSections: '.subsection',
        sectionElem: 'section',
        showHeadline: true,
        headlineText: '',
        showTopLink: true,
        topLinkText: 'Apps Documentation',
        fixedMargin: 40,
        scrollOffset: 80,
        animated: true,
        speed: 500,

        insertTarget: '#box-for-genereted-scrollnav',
        insertLocation: 'insertBefore',
        arrowKeys: false,
        /*scrollToHash: true,*/
        scrollToHash: false,
        onInit: null,
        onRender: null,
        onDestroy: null
      });

    </script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>
