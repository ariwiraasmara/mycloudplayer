<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use \App\Mylibs;

class UserTest extends TestCase {
    use RefreshDatabase;
    public $gen;
    //use MyLibs\generateid;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected function setUp(): void {
        $this->gen = new \App\Mylibs\generateid;
    }

    public function test_example() {
        //$this->assertTrue(true);
        $this->assertEquals(11, $this->gen->getID());
    }

}
