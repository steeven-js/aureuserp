<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GeneratePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shield:generate-permissions 
                            {--all : Generate all permissions for resources, pages, and widgets}
                            {--resources : Generate permissions for resources only}
                            {--pages : Generate permissions for pages only}
                            {--widgets : Generate permissions for widgets only}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate permissions for Filament resources, pages, and widgets (wrapper around shield:generate)';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Génération des permissions FilamentShield...');
        $this->newLine();

        $generateAll = $this->option('all');
        $generateResources = $this->option('resources');
        $generatePages = $this->option('pages');
        $generateWidgets = $this->option('widgets');

        // Si aucune option n'est spécifiée, générer tout
        if (!$generateAll && !$generateResources && !$generatePages && !$generateWidgets) {
            $generateAll = true;
        }

        try {
            $options = [];
            
            if ($generateAll) {
                $options[] = '--all';
            } else {
                if ($generateResources) {
                    $options[] = '--option=resources';
                }
                if ($generatePages) {
                    $options[] = '--option=pages';
                }
                if ($generateWidgets) {
                    $options[] = '--option=widgets';
                }
            }

            $options[] = '--panel=admin';

            // Construire la commande avec les options
            $commandOptions = [];
            if ($generateAll) {
                $commandOptions['--all'] = true;
            } else {
                if ($generateResources) {
                    $commandOptions['--option'] = 'resources';
                }
                if ($generatePages) {
                    $commandOptions['--option'] = 'pages';
                }
                if ($generateWidgets) {
                    $commandOptions['--option'] = 'widgets';
                }
            }
            $commandOptions['--panel'] = 'admin';
            
            $this->info('Exécution de: php artisan shield:generate');
            $this->newLine();

            $exitCode = $this->call('shield:generate', $commandOptions);

            if ($exitCode === 0) {
                $this->info('✓ Toutes les permissions ont été générées avec succès!');
                $this->newLine();
                $this->info('Vous pouvez maintenant assigner ces permissions aux rôles via /admin/shield/roles');
                return Command::SUCCESS;
            } else {
                $this->error('Erreur lors de la génération des permissions');
                return Command::FAILURE;
            }
        } catch (\Exception $e) {
            $this->error('Erreur lors de la génération des permissions: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
