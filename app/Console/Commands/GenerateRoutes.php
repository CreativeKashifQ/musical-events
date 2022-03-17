<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class GenerateRoutes extends Command
{

    protected $signature = 'generate:routes {entity} {--nm}';

    protected $description = 'Generate Routes';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // get args and options
        $entityName = $this->argument('entity');
        $entityNamePlurized = Str::plural($entityName);
        $groupPrefix = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $entityNamePlurized));
        $entityParamter = Str::camel($entityName);
        $routeNamePrefix =  strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $entityName));
        $noModel = $this->option('nm');
        // defend
        if ($routeNamePrefix === 'web' || $routeNamePrefix === 'channels' || $routeNamePrefix === 'api' || $routeNamePrefix === 'console') {
            $this->error('You cannot write these files!');
            return null;
        }

        $file_path = "routes/" . $routeNamePrefix . '.php';
        if (file_exists($file_path)) {
            $this->error('File already exists with name ' . $routeNamePrefix . ' in routes.');
            return null;
        }
        // make model and policy
        if (!$noModel) {

            Artisan::call('make:model ' . $entityName . ' -m');
        }


        // make route file
        $file_handle = fopen($file_path, 'a');
        $content = "<?php\n\n" .
            "use Illuminate\Support\Facades\Route;\n\n" .
            "/*\n" .
            "|--------------------------------------------------------------------------\n" .
            "|  " . $entityName . " Routes\n" .
            "|--------------------------------------------------------------------------\n" .
            "|\n" .
            "| Here is where you can register " . $entityParamter . " routes. All\n" .
            "| manage routes will be written to manage entity with associations\n" .
            "|\n" .
            "| Entity Name       :  " . $entityName . "\n" .
            "| Group Prefix      :  " . $groupPrefix . "\n" .
            "| Entity Parameter  :  " . $entityParamter . "\n" .
            "| Route Name Prefix :  " . $routeNamePrefix . "\n" .
            "|\n" .
            "*/\n" .
            "\n" .
            "\n" .
            "//////////////////////////////////////////////////////////////////////////////\n" .
            "// routes for guests or end users\n" .
            "//////////////////////////////////////////////////////////////////////////////\n" .
            "Route::prefix('" . $groupPrefix . "')->group(function () {\n" .
            "    Route::middleware('guest')->group(function () {\n" .
            "        //Next-Slot-Consume"  .
            "    \n});\n" .
            "});\n" .
            "\n" .
            "\n" .
            "//////////////////////////////////////////////////////////////////////////////\n" .
            "// routes for managers\n" .
            "//////////////////////////////////////////////////////////////////////////////\n" .
            "Route::prefix('manage/" . $groupPrefix . "')->group(function () {\n" .
            "    Route::middleware('auth')->group(function () {\n" .
            "         //Next-Slot-Manage"  .
            "    \n});\n" .
            "});";
        fwrite($file_handle, $content);
        fclose($file_handle);

        // register route file in web routes
        $file_path = 'routes/web.php';
        $file_handle = fopen($file_path, 'a');
        fwrite($file_handle, "require_once __DIR__.'/" . $routeNamePrefix . ".php';\n");
        fclose($file_handle);




        // create policies
        if (!$noModel) {
            if (!file_exists('app/Policies')) {
                mkdir('app/Policies', 0777, true);
            }

            $file_path = 'app/Policies/' . $entityName . 'Policy' . ".php";
            $file_handle = fopen($file_path, 'a');
            $content =
                "<?php\n" .
                "namespace App\Policies;\n\n" .
                "use App\Models\\" . $entityName . ";\n" .
                "use App\Models\User;\n\n" .
                "class " . $entityName . "Policy\n" .
                "{\n" .
                "    //Next-Slot" .
                "\n}";
            fwrite($file_handle, $content);
            fclose($file_handle);
        }



        // success
        $this->info('Routes ' .  $entityName .  ' Created!');
    }
}
