# Input field components for Laravel
## Input, select y item list que simplifica el código a una línea y un par de parámetros,

Especifica el modelo y la librería detectará la tabla, fillables, relaciones, etc. para generar los siguientes archivos:

- Input
- Select
- Simple list 

## Instalación

Instala la librería por composer.

```sh
composer require master_awss/input_field_components
```

Publicar las vistas de los componentes::

```sh
php artisan vendor:publish --provider="MasterAWSS\InputFieldComponents\InputFieldComponentsServiceProvider"
```
Este comando generará los componentes en views/vendor/master

## Uso

# Select
```sh
<x-master-select :options="$object" label="Label"></x-master-select>
```
# Input
```sh
<x-master-input label="Label"></x-master-input>
```
# Simple list item
```sh
<x-master-simple-list label="Label" :value="$value"></x-master-simple-list>
```

## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
