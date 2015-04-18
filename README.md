Nawiat is a A super extendible CMS made for developers based on Laravel.

# Why Nawiat is super extendible?
* Nawiat is composed by 'Modules'
* Each 'Module' is just a Laravel package.
* Each Laravel package shipped with a Facade dealing with everything.

Even admin panel are composed by the same rules.

That's why Nawiat is super extendible.

Design philosophy for 'Module':
* Utilize on Laravel rather than adding more magics.
* Content of some kinds of modules are better stored in files rather than database.
* Each module/admin panel is just a Laravel package.
* Modules favor for flexbility; Admin panels favor for conventions.
* Components are all provided by the Modules. CMS itself provides as less stuff as possible.
* Components provided by the CMS should be optional rather than required for creating new modules.
* Each module should provide 'one' laravel-style facade wrapping all the details to make it easier for developers to use.

Considering:
* NoSQL is more flexibile.

Slogan: Nawiat. A super extendible CMS made for developers based on Laravel.
Release Official site as sample.
Create a playground site.

nawiat.org
playground.nawiat.org

nawiat-sample

Design philosophy for template system:
* Provide editor for core content of the pages. ( Users always want to feel they can control the system. )
* Do not provide editor for layout files.( Users should hire a designer if they really want to change the layout. )

Design philosophy for theme system:
* Provide enough flexibility for developers/designers to do what they want
* Not favor for switchable theme system. (It results in strong conventions on the CMS.)

# TODO
* Facades for Modules
* i18n for admin panels
