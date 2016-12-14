# IONIC 2 - RWAPPS
<!-- TOC depthFrom:1 depthTo:6 withLinks:1 updateOnSave:1 orderedList:0 -->

- [IONIC 2 - RWAPPS](#ionic-2-rwapps)
	- [Convention](#convention)
	- [Resources](#resources)
		- [Ionic2](#ionic2)
		- [AngularJS 2](#angularjs-2)
		- [Android SDK](#android-sdk)
		- [API / http](#api-http)
	- [Installation](#installation)
		- [Basics](#basics)
		- [Get the project](#get-the-project)
			- [Install Dependencies](#install-dependencies)
		- [Manage Plugins](#manage-plugins)
			- [Common Plugins](#common-plugins)
			- [Jobs](#jobs)
			- [Videos](#videos)
			- [Headlines](#headlines)
	- [Run and Test](#run-and-test)
		- [iOS](#ios)
		- [Android](#android)
	- [Push on ReliefWeb Repo](#push-on-reliefweb-repo)
	- [Deploy](#deploy)
		- [Build Android](#build-android)
		- [Build iOS](#build-ios)
		- [Itunes connect](#itunes-connect)
	- [VIDEO: Update Gist by merging a fork](#video-update-gist-by-merging-a-fork)
	- [HTTP METHOD](#http-method)
	- [Storage](#storage)
	- [Structure](#structure)
		- [Job](#job)
		- [Headlines](#headlines)
		- [Videos](#videos)
	- [TODO](#todo)
		- [TODO Global](#todo-global)
		- [TODO Job](#todo-job)
		- [TODO Headlines](#todo-headlines)
		- [TODO Videos](#todo-videos)

<!-- /TOC -->

- Ionic 2 uses kebob-casing for file names (my-about-page.html) and css classes (.my-about-page), and uses PascalCasing for JavaScript classes in ES6/TypeScript (MyAboutPage)

see: http://ionicframework.com/docs/v2/cli/generate/

- for SQLite all properties with _ and interface attached to SQLite: use camelCase

- Angular2 style Guide: https://angular.io/styleguide
	- files and folder: feature.type.ts e.g.: app/heroes/hero-list.service.ts
  - types: .service, .pipe
	- components: hero-list.ts -> export class HeroListComponent
	- Constants: CAPITAL `export const VILLAINS_URL = 'api/villains'`
	- Interface:
	 	- name: UpperCamelCase
		- variable: lowerCamelCase
	- Properties and Methods: lower camel case
	- import: Do leave one whitespace character inside of the import statements' curly braces
  - ts function lowerCamel
	- import { ComponentName }
	- Switch case should follow this format : http://www.w3schools.com/js/js_switch.asp


## Resources
### Ionic2
 - [Components](http://ionicframework.com/docs/v2/components/#overview)
 - Ionic2 framework: http://ionicframework.com/docs/v2/getting-started/installation/
 - Ionic.io (Ionic tools): http://docs.ionic.io/
 - GitterRoom: https://gitter.im/driftyco/ionic-io-testers
 - to Start a new projet: `ionic start app blank --v2 --ts` use .ts!

### AngularJS 2
 - [Official Doc](https://angular.io/)
 - [Style Guide](https://github.com/johnpapa/angular-styleguide/blob/master/a2/README.md)

### Android SDK
 - Download the [SDK Tools Only](http://developer.android.com/sdk/index.html#Other)
 - Unzip it and go into `android-sdk-linux\tools\`
 - Run `./android` and the Android SDK Manager will open
 - Install all the following
   - Tools Folder
   - Android 6.0 (API23)
   - Android 5.1.1 (API22)
   - Extra : 'Android Support Repository', 'Android Support Library', 'Google Play services', 'Google Repository'
 - Then you can go again to the `tools` folder and type `./android` to open the Android SDK Manager to update things.

### API / http
- [ReliefWeb API Doc](http://reliefweb.int/help/api/advanced)
- [Interactive API](http://apidoc.rwlabs.org/swagger)
- [Andy ReliefWeb API Doc](http://apidoc.andyfootner.com/)
    - username: reliefweb
    - password: reliefweb
- URL
    - Job :   http://api.reliefweb.int/v1/jobs/?appname=rw-app-jobs
    - Headline : http://api.reliefweb.int/v1/reports/?appname=rw-app-headlines
    - Video :  https://www.googleapis.com/youtube/v3/ (Youtube API)


## Installation
###  Basics
  - Install [Node](https://nodejs.org/en/)
    - `node -v` to check if it's installed
    - If not, go [here](https://nodejs.org/en/) and install it (v4 is good)
  - Update [NPM](https://www.npmjs.com/)
    - `sudo npm install npm -g`
  - Install [Ionic](http://ionicframework.com/)
    - `sudo npm install -g ionic@beta` to use ionic2

###  Get the project
#### Install Dependencies
  - NPM : [doc](https://docs.npmjs.com/)
   - `rm -rf node_modules/` : delete files in node_modules
   - `npm install` : install all dependencies present in package.json
   - `npm install <package_name> --save` : install the package, `--save` is used to write the new dependency into package.json
   - `npm update` : Update all packages present in the package.json
   - `npm install -g jshint` : `-g` is used to install the package globally
  - TYPING : [doc](https://github.com/typings/typings)
    - `npm install typings --global` : global install
  - Moment : [doc](https://github.com/typings/typings)
    - `typings install npm~moment --save` : install moment.js for a TS project
    - `import * as moment from 'moment';` : import moment
    - Use `typings search moment` to get the one from NPM

- Not to forget :wink: :
     - `npm install -g cordova`
     - `npm install -g ios-sim`
     - `npm install cordova-common`
     - `npm install xcode`
     - `npm install ios-deploy`

### Manage Plugins
#### Common Plugins
- `ionic plugin add cordova-plugin-device`
- `ionic plugin add cordova-plugin-console`
- `ionic plugin add cordova-plugin-whitelist`
- `ionic plugin add cordova-plugin-splashscreen`
- `ionic plugin add cordova-plugin-statusbar`
- `ionic plugin add ionic-plugin-keyboard`
- `ionic plugin add cordova-plugin-x-socialsharing`
- `ionic plugin add cordova-sqlite-storage`
- `ionic plugin add cordova-plugin-google-analytics`
- `ionic plugin add cordova-fabric-plugin --variable FABRIC_API_KEY=f21f9de554075efb7a2615651c235221737064e1 --variable FABRIC_API_SECRET=f569c1d98f4d3520d0a8849ad0ca9a6052cefe0249e05d89634a896abb92c6f5`

NB: to use google analytics import GoogleAnalytics from ionic-native in app.ts
and in platform ready:       GoogleAnalytics.startTrackerWithId("UA-50528110-2");

#### Jobs
- `ionic plugin add cordova-plugin-geolocation`

#### Videos
- `ionic plugin add cordova-plugin-x-toast`
- `ionic plugin add cordova-plugin-network-information`
#### Headlines
- `ionic plugin add cordova-plugin-inappbrowser`

##  Run and Test
###  iOS
- `ionic platform add ios`
- `ionic build ios`
- `ionic emulate ios`
- `ionic emulate ios --liverelaod --consolelogs --serverlogs`
- `ionic run ios`
- The magic CLI : `ionic run ios --livereload --consolelogs --serverlogs --emulator --address localhost`

### Android
- `ionic platform add android`
- `ionic build android`
- `ionic run android`

## Push on ReliefWeb Repo
- Jobs: `git push -f git@gitlab.com:RWapps/ReliefWeb_Jobs.git dev:master`

- Headlines: `git push -f git@gitlab.com:RWapps/Headlines.git dev:master`

- Videos: `git push -f git@gitlab.com:RWapps/ReliefWeb_Video.git dev:master`

##  Deploy
### Build Android
1. Verify API version in config.xml
`<preference name="android-minSdkVersion" value="19"/>`
2. run shell script  `deployapp.sh`
NB: add cross-walk and `deployapp.sh -x86` and `deployapp.sh -xarmv7`

### Build iOS
1. Start by `ionic serve`
NB: `ionic build ios` uses the www folder (updated only with a serve)
2. `ionic build ios`
3. Open jobs_relief_web/platforms/ios/RW_jobs.xcodeproj (with x-code 7.2 minimum)
4. Select target -> Build settings update code signing
5. Check:
  - General identity
  - Build settings/code-sigining/provisioning-profile (debug & release)
  - Open Fabric (mac app):
    - new app -> select project
    - install crashanalytics (get the script build phase)
  - x-code: Build phase Run script:
`./Fabric.framework/run 3fdf3749059be7a91351562adb583e129a3d38d45dca9
c33f191bf01e42756cad77d03ecf0b5a6a6703821dbb5136a8a8ae43e66`
  - x-code: slect target : Generic iOS Device
  - Product -> build
  - Product -> clean
  - Product -> archive

###  Itunes connect
1. [Create certificate](https://developer.apple.com/account/ios/profile/)
2. [Create appid](https://developer.apple.com/account/ios/profile/ ) - RW Jobs
3. Create 2 provisioning profiles (one dev one distribution RW Jobs App Store
4. Build app (ionic build ios - see above Build iOS)
5. Validate
5. Upload to App Store
7. Go to [iTunesConnect](https://itunesconnect.apple.com/WebObjects/iTunesConnect.woa/) and select the app


## VIDEO: Update Gist by merging a fork
1. Clone the gist
`git clone https://gist.github.com/Reliefapps/ba8e440408ac5dd9dd0d6ed670b52f02`
2. Add remote with changes (Fork url)
`git remote add changes https://gist.github.com/JohnGeorgiadis/018781509605b2ef0ed101973b962c27`
3. Fecth the changes
git fetch changes
4. Merge the changes (your branch)
git merge changes/master
5. Push the changes
git push

## HTTP METHOD

- Observable [(Documentation)](http://reactivex.io/documentation/observable.html)

	 Ionic2 use Observable form request to API allowing the use of a cache system and handling error.  Exemple for a request using POST resquest (search is a object from the APP)

```

	query = {
				fields: { include: ["title", "id", "date", "country", "source", "city", "language", "experience","source", "theme","type", "career_categories", "body-html", "how_to_apply-html"] },
				query: {
					value: queryvalue,
					fields: ["title", "body"]
				},
				filter: {
					operator: "and",
					conditions: [
						search.experience.id ? { field: "experience.id", value: search.experience.id } : { field: "experience", value: "" },
						search.type.id ? { field: "type.id", value: search.type.id } : { field: "type", value:"" },
						search.career.id ? { field: "career_categories.id", value: search.career.id } : { field: "career_categories", value: "" },
						search.theme.id ? { field: "theme.id", value: search.theme.id } : { field: "theme", value: "" },
						search.organization ? { field: "source", value: search.organization } : { field: "source", value: "" },
						search.organization_type.id ? { field: "source.type.id", value: search.organization_type.id } : { field: "source", value: ""},
					]
				},
				limit : 24,
				offset : offset,
				preset: "latest"
			}
```

Then `return this.http.post(this._jobUrl, JSON.stringify(query))`  where http is an Http object from Ionic returning a observable than we subscribe to get data.

## Storage

RWApps use SQLite storage for favorite and and localstorage for the walk-through. We can change the walk-through between 2 releases and it will be visible by everyone
- `ionic plugin add cordova-sqlite-storage`

** Favorite elements are not loaded from remote serve but from the DB and can be consulted off line (except for video)**

Use in the applications :

- `import {Storage, SqlStorage, LocalStorage} from 'ionic-angular';`
- `this.storage = new Storage(SqlStorage, { name: 'rw_jobs' });`

NB : Name of DB are rw-name_of_the_app

- Resquest to DB : `this.storage.query( query : string)`

See information on [Ionic](http://ionicframework.com/docs/v2/api/platform/storage/SqlStorage/)

##  Structure

### Job

```
.
├── app.ts
├── app-config.ts
├── components
│   ├── job-detail
│   ├── job-item
│   └── search-item
├── data
│   ├── data-base.service.ts
│   ├── result-data.service.ts
│   └── search-data.service.ts
├── interfaces
│   ├── job.interface.ts
│   ├── mock-search.interface.ts
│   └── search.interface.ts
├── pages
│   ├── about
│   ├── apply
│   ├── detail
│   ├── favorite-detail
│   ├── home
│   ├── introduction
│   ├── result
│   └── search
├── pipes
│   ├── nice-time.pipe.ts
│   └── nice-title.pipe.ts
├── services
│   ├── date.service.ts
│   ├── geoloc.service.ts
│   ├── job.service.ts
│   └── search.service.ts
└── theme
```

### Headlines

```
.
├── app-config.ts
├── app.html
├── app.ts
├── components
│   ├── disaster-card
│   ├── disaster-description
│   ├── report-card
│   ├── report-description
│   ├── search
│   └── toggle
├── data
│   └── data-base.ts
├── interfaces
│   ├── country.interface.ts
│   ├── disaster.interface.ts
│   ├── filter.interface.ts
│   ├── organization.interface.ts
│   ├── report.interface.ts
│   └── search.interface.ts
├── pages
│   ├── description
│   ├── reportlist
│   └── savereport
├── services
│   ├── country.service.ts
│   ├── date.service.ts
│   ├── filter.service.ts
│   ├── organization.service.ts
│   ├── report.service.ts
│   └── search.service.ts
└── theme

```

### Videos

```
.
├── app.ts
├── components
│   ├── latest-video
│   ├── list-card
│   ├── main-card
│   ├── main-slide
│   ├── main-video
│   ├── share-icon
│   ├── video-description
│   └── video-item
├── data
│   └── data-base.ts
├── interfaces
│   ├── channel.interface.ts
│   ├── playListData.ts
│   ├── playlist.interface.ts
│   ├── playlistitem.interface.ts
│   └── video.interface.ts
├── pages
│   ├── modal-about
│   ├── playlistdetails
│   └── playlistselection
├── providers
│   └── constants.ts
├── services
│   ├── gistService.ts
│   ├── orientationService.ts
│   ├── shareButtonService.ts
│   └── youtubeService.ts
└── theme
```


## TODO

### TODO Global

:white_check_mark:  Send the key parameter when asking to the API

:white_check_mark:  Local cache/storage system

:x: Friendly 50X error handling (The apps should say something like "Server unavailable" or "Sorry, we are busy at this moment, please try again")

### TODO Job

:white_check_mark:  Design (considering specification)

:white_check_mark: Change “Cancel” on top left to “Close”

:white_check_mark: Make the search screen appear from the bottom (Modal)

:white_check_mark: Change the 'closing date' color to # f25e54 if the closing date is closer than 1 week

:white_check_mark: Display longer job titles

:white_check_mark: Change the bg color to UN blue #0288bb for splashscreen

:white_check_mark: reveal the utility/status bar(time/power etc)

:white_check_mark: Smooth refresh

:white_check_mark: Smooth delete

:x: Notifications (bell)

### TODO Headlines

:white_check_mark: Restructure API service

:x: Faster the menu


### TODO Videos

:x: Design (font, size, font-weight considering specification)

:x: Reduce the organization list

:x: Smoother hidden description
