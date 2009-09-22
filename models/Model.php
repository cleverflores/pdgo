<?php
/*
 *  $Id: Model.php 0001 2007-12-25 10:47:28 Clever.Flores $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.phpdoctrine.com>.
 */

class Model{

	/**
	* Path
	*
	* @var string $pathdoctrine root directory
	*/
	private static $_path;

	/**
	* _loadedModelFiles
	*
	* Array of all the loaded models and the path to each one for autoloading
	*
	* @var array
	*/
	private static $_loadedModelFiles = array();

	public static function autoload($className)
	{
		if (class_exists($className, false) || interface_exists($className, false)) {
			return false;
		}
		
		if ( ! self::$_path) {
		   $config = Zend_Registry::get("config");
			self::$_path = dirname(__FILE__). DIRECTORY_SEPARATOR .$config->db->dbname;
		}
		
		$class = self::$_path . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
		
		if (file_exists($class)) {
			require $class;
			return true;
		}

		$class = self::$_path . DIRECTORY_SEPARATOR ."generated".DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
		
		if (file_exists($class)) {
			require $class;
			return true;
		}
		
		$loadedModels = self::$_loadedModelFiles;
		
		if (isset($loadedModels[$className]) && file_exists($loadedModels[$className])) {
			require_once $loadedModels[$className];
			return true;
		}
		
		return false;
	}
}
