Nawiat is a cool CMS that Laravel users can extend with no learning curve.

Design philosophy:
* Utilize on Laravel rather than adding more magics.
* Content of some kinds of modules are better stored in files rather than database.
* Each module/admin panel is just a Laravel package.
* Modules favor for flexbility; Admin panels favor for conventions.
* Components are all provided by the Modules. CMS itself provides as less stuff as possible.
* Components provided by the CMS should be optional rather than required for creating new modules.

Considering:
* NoSQL is more flexibile.

Slogan: Nawiat. A super extendible CMS made for developers based on Laravel.

Design philosophy about template system:
* Provide editor for core content of the pages. ( Users always want to feel they can control the system. )
* Do not provide editor for layout files.( Users should hire a designer if they really want to change the layout. )
