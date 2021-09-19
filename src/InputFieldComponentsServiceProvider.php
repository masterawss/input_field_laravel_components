<?php
namespace MasterAWSS\InputFieldComponents;

use Illuminate\Support\ServiceProvider;
use MasterAWSS\InputFieldComponents\Components\Input;
use MasterAWSS\InputFieldComponents\Components\Select;
use MasterAWSS\InputFieldComponents\Components\SimpleList;

class InputFieldComponentsServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadViewsFrom(__DIR__.'/views', 'master');
        $this->loadViewComponentsAs('master', [
            Input::class,
            Select::class,
            SimpleList::class,
        ]);
        $this->publishes([
            __DIR__.'/views/components' => resource_path('views/vendor/master'),
        ]);
    }
}
