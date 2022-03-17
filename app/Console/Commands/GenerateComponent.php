<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class GenerateComponent extends Command
{

    protected $signature = 'generate:component {entity} {--a=} {--m} {--p} {--c}';

    protected $description = 'Command description';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $entityName = $this->argument('entity');
        $entityParamter = Str::camel($entityName);
        $routeNamePrefix =  strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $entityName));
        $action = $this->option('a');
        $actionKababCase =  strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $action));
        $mode = $this->option('m') ? 'Manage' : 'Consume';
        $parameter = $this->option('p');

        $isComponent = $this->option('c');
        if (!$action) {
            $this->error('Provide action name!');
            return;
        }

        // if (!file_exists("routes/" . $routeNamePrefix . ".php")) {

        //     Artisan::call('generate:model ' . $entityName);
        // }

        $command = 'livewire:make ' . $entityName . '/' . $mode . '/' . ($isComponent ? 'Components/' : '') . $action;
        Artisan::call($command);

        if (!$isComponent) {
            $file_path = "routes/" . $routeNamePrefix . '.php';
            if (file_exists($file_path)) {
                $content =
                    "Route::get('" .  $actionKababCase . ($parameter ? "/{" . $entityParamter . "}" : "") . "', \\App\\Http\\Livewire\\" . $entityName . "\\" . $mode . '\\' . $action . "::class)->name('" . $routeNamePrefix . "." .  Str::lower($mode) . "." . $actionKababCase . "');\n" .
                    "        //Next-Slot-" . $mode;

                $data = file_get_contents($file_path);
                $data = str_replace("//Next-Slot-" . $mode, $content, $data);
                file_put_contents($file_path, $data);
            }
        }


        $policy_file = 'app/Policies/' . $entityName . 'Policy' . ".php";
        if (file_exists($policy_file)) {
            $data = file_get_contents($policy_file);
            $content =
                "\n    public function " . Str::lower($mode) . $action . "(User $" . "user," . $entityName . " $" .  $entityParamter   . ")\n" .
                "    {\n" .
                "        // logic\n" .
                "    }\n" .
                "    //Next-Slot";

            $data = str_replace("//Next-Slot", $content, $data);
            file_put_contents($policy_file, $data);
        }


        $file_path = 'app/http/livewire/' . $entityName . '/' . $mode . '/' .  ($isComponent ? 'Components/' : '') . $action . '.php';

        $content =
            "<?php\n\n" .

            "namespace App\Http\Livewire\\" . $entityName . "\\" . $mode  . ($isComponent ? '\\Components' : '') . ";\n\n" .

            "use Illuminate\Foundation\Auth\Access\AuthorizesRequests;\n" .
            "use Livewire\Component;\n" .
            "use App\Models\\" .  $entityName . ";\n\n" .

            "class " . $action . " extends Component\n" .
            "{\n" .
            "    use AuthorizesRequests;\n\n" .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Public Data\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | This data will be visible to client. Don't instantiate any instance of a class\n"  .
            "    | containing sensitive information\n"  .
            "    */\n"  .
            "\n"  .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Override Properties\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Component properties like rules, messages\n"  .
            "    */\n"  .
            "\n"  .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Listeners\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Livewire event listeners like created, updated or deleted\n"  .
            "    */\n"  .
            "\n"  .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Lifecycle Hooks\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Component hooks like hydrate, updated, render\n"  .
            "    */\n"  .
            "\n"  .
            "    public function mount(" . ($parameter ? $entityName . " $"  . $entityParamter : '') . ")\n" .
            "    {\n" .
            (file_exists($policy_file) ? "        //$" . "this->authorize('" . Str::lower($mode) . $action . "', new " . $entityName . ");\n" : '') .
            "    }\n\n" .
            "    public function render()\n" .
            "    {\n" .
            "        return view('livewire." . $routeNamePrefix . "." . Str::lower($mode) . "." .   ($isComponent ? 'components.' :  '')   . $actionKababCase . "');\n" .
            "    }\n\n" .
            "\n"  .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Methods\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | User defined methods like, register, verify or load\n"  .
            "    */\n"  .
            "\n"  .
            "    public function " .  Str::camel($action) . "()\n" .
            "    {\n" .
            (file_exists($policy_file) ? "        //$" . "this->authorize('" . Str::lower($mode) . $action . "', new " . $entityName  . ");\n"  : '') .
            "    }\n\n" .
            "    /*\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Helper Functions\n"  .
            "    |--------------------------------------------------------------------------\n"  .
            "    | Class helper functions\n"  .
            "    */\n"  .
            "}";


        file_put_contents($file_path, $content);

        $this->info('The command was successful!');
    }
}
