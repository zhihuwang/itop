<?php
// Copyright (C) 2016 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Renderer\Console;

use Combodo\iTop\Form\Form;
use Combodo\iTop\Renderer\FormRenderer;
use Combodo\iTop\Renderer\RenderingOutput;
use \Dict;

require_once('fieldrenderer/consolesimplefieldrenderer.class.inc.php');
require_once('fieldrenderer/consolesubformfieldrenderer.class.inc.php');

class ConsoleFormRenderer extends FormRenderer
{
	const DEFAULT_RENDERER_NAMESPACE = 'Combodo\\iTop\\Renderer\\Console\\FieldRenderer\\';

	public function __construct(Form $oForm)
	{
		parent::__construct($oForm);
		$this->AddSupportedField('StringField', 'ConsoleSimpleFieldRenderer');
		$this->AddSupportedField('SubFormField', 'ConsoleSubFormFieldRenderer');
	}
}