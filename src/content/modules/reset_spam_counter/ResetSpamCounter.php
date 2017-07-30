<?php
class ResetSpamCounter extends Controller {
	private $moduleName = "reset_spam_counter";
	public function getSettingsLinkText() {
		return get_translation ( "open" );
	}
	public function getSettingsHeadline() {
		return get_translation ( "reset_spam_message_counter" );
	}
	public function settings() {
		return Template::executeModuleTemplate ( $this->moduleName, "settings.php" );
	}
	public function doReset() {
		Settings::set ( "contact_form_refused_spam_mails", "0" );
		Request::redirect ( ModuleHelper::buildActionURL ( "home" ) );
	}
}