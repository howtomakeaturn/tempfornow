# TODO
* Facades for Modules
* Add artisn command to refresh the CMS
* Create a Twitter account for it.
  - https://twitter.com/octobercms
  - https://twitter.com/wardrobecms
* Create a github organization for it.
* GA plugin
* FB tag plugin
* template sys with view composer?
  - declare variables in controller rather than hard-coded in blade
* LOGO copy vue.js
* template copy http://vuejs.org/ 
  - a special layout for homepage
* Contracts to make the CMS solid
* Laravel is a trademark of Taylor Otwell. Copyright © Taylor Otwell.

* (Atayal is ) Brought to you with :love by howtomakeaturn[twitter]

----------------------------------------------------------

Atayal(泰雅) is a A super extendible CMS made for developers based on Laravel.

# Why Atayal is super extendible?
* Atayal is composed by 'Modules'
* Each 'Module' are just two Laravel packages ( Main/Admin ).
* Each 'Main' Laravel package of 'Module' is shipped with a Facade or Manager to help dealing with everything.

That's why Atayal is super extendible.

Design philosophy for 'Module':
* Utilize on Laravel rather than adding more magics.
* Content of some kinds of modules are better stored in files rather than database.
* Each module/admin panel is just a Laravel package.
* Modules favor for flexbility; Admin panels favor for conventions.
* Components are all provided by the Modules. CMS itself provides as less stuff as possible.
* Components provided by the CMS should be optional rather than required for creating new modules.
* Each module should provide 'one' laravel-style facade wrapping all the details to make it easier for developers to use.
* Each module should provide 'interfaces' in Contracts folder so other developers can understand and extend it easily.

Considering:
* NoSQL is more flexibile.

Slogan: Atayal. A super extendible CMS made for developers based on Laravel.
I created a CMS because I don't know how to extend all the CMS like Wordpress, Joomla, Drupal, October, and etc.

Release Official site as sample.
Create a playground site.

atayal.org
playground.atayal.org

atayal-sample

Design philosophy for template system:
* Provide editor for core content of the pages. ( Users always want to feel they can control the system. )
* Do not provide editor for layout files.( Users should hire a designer if they really want to change the layout. )

Design philosophy for theme system:
* Provide enough flexibility for developers/designers to do what they want
jNot favor for switchable theme system. (It results in strong conventions on the CMS.)

Design philosophy for modules:
* content dynamicity
    - high -> low
    - database -> file system -> laravel config system

Core Idea:
  - I am a developer. I'd rather write some codes in the CMS than learn usages of the CMS.

The offical site of Atayal is shipped with Atayal itself as a starting example for you.

# Advanced
Don't wanna just a CMS, and don't wanna create 'Modules' at all?
Just put your stuff in 'app/' folder and develop like a normal Laravel project!
Atayal won't get in your way!


# script
find . -type f | xargs sed -i  's/Nawiat/Atayal/g'

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
