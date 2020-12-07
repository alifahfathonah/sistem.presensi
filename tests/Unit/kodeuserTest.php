<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class kodeuserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$id = 0;
    	$notlp = '082109876543';
    	
    	$idbaru = $id + 1;
    	$tlp = substr($notlp, -4);
    	$waktu = date('mY');

    	$kd_user = $waktu.$tlp.$idbaru;

        $this->assertEquals(1220206544, $kd_user);
    }
}
