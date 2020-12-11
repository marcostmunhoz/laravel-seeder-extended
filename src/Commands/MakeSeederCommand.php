<?php

namespace MarcosTMunhoz\LaravelSeederExtended\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class MakeSeederCommand extends GeneratorCommand
{
    /**
     * Command signature.
     *
     * @var string
     */
    protected $name = 'seeder:make';

    /**
     * Command description.
     *
     * @var string
     */
    protected $description = 'Creates a new seeder class.';

    /**
     * The generated file type.
     *
     * @var string
     */
    protected $type = 'Seeder';

    /**
     * Returns the stub used for generation.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubBasePath = $this->getBaseStubPath();
        $fileExists = is_file($path = $this->laravel->basePath($stubBasePath));

        return $fileExists
            ? $path
            : __DIR__.'/../../'.$stubBasePath;
    }

    /**
     * Returns the generated class root namespace.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return $this->getBaseNamespace();
    }

    /**
     * Returns the generated file path.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getPath($name)
    {
        $filename = Str
            ::of($name)
            ->replace($this->getBaseNamespace().'\\', '')
            ->replace('\\', '/');

        return $this->laravel->databasePath('seeders/'.$filename.'.php');
    }

    /**
     * Returns the base class namespace.
     *
     * @return string
     */
    private function getBaseNamespace()
    {
        return 'Database\\Seeders';
    }

    /**
     * Returns the base stub path.
     *
     * @return string
     */
    private function getBaseStubPath()
    {
        return 'stubs/seeder.php.stub';
    }
}
