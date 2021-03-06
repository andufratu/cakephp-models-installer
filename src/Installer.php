<?php
namespace AnduFratu\CakePhpModelsInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller {

    public function supports($packageType) {
        return 'cakephp-models' === $packageType;
    }

    public function getPackageBasePath(PackageInterface $package) {
        return 'src/Model';
    }

    public function getInstallPath(PackageInterface $package) {
        return 'src/Model';
    }

}
