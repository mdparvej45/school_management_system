<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeTraitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name : The name of the trait}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Traits/{$name}.php");

        // Check if the Traits directory exists; if not, create it
        if (!File::exists(app_path('Traits'))) {
            File::makeDirectory(app_path('Traits'));
        }

        // Check if the trait file already exists
        if (File::exists($path)) {
            $this->error("Trait '{$name}' already exists!");
            return Command::FAILURE;
        }

        // Create the trait file
        $traitTemplate = <<<EOT
        <?php

        namespace App\Traits;

        trait {$name}
        {
            // Add your methods here
        }
        EOT;

        File::put($path, $traitTemplate);

        $this->info("Trait '{$name}' created successfully!");

        return Command::SUCCESS;
    }
}
