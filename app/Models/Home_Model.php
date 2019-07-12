<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Models;

use app\Core\ModelClass;

class Home extends ModelClass
{
	public function datasiswa()
	{
		$siswa['nama'] = 'Shadilla Az Zahra';
		$siswa['kelas'] = 'XI';
		$siswa['alamat'] = 'Cikadu Cisayong';

		return $siswa;
	}
	public function listkategori($value='')
	{
		$this->_db->table('tb_kategori');
		return $this->_db->fetch();
	}
}