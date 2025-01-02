<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
	public function up(): void
	{
		$this->migrator->add('general.site_name', config('app.name'));
		$this->migrator->add('general.site_description', null);
		$this->migrator->add('general.is_maintenance_mode', false);
	}
};