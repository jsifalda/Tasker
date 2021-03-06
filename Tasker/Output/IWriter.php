<?php
/**
 * Class IWriter
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 28.08.13
 */

namespace Tasker\Output;


interface IWriter
{

	const NONE = null;
	const SUCCESS = 'green';
	const ERROR = 'red';
	const INFO = 'blue';

	/**
	 * @param string $message
	 * @param string $type
	 * @return void
	 */
	public function write($message, $type = self::SUCCESS);

	/**
	 * @param string $message
	 * @param string $type
	 * @return void
	 */
	public function writeLn($message, $type = self::SUCCESS);

	/**
	 * @param \Exception $ex
	 * @return void
	 */
	public function writeException(\Exception $ex);
}