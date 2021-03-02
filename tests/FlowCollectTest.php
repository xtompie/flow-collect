<?php declare(strict_types=1);

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\FlowCollect\FlowCollect;

class FlowCollectTest extends TestCase
{
    public function testInstanceOf()
    {
        // given
        $flow = new class([]) {
            use Flow;
            use FlowCollect;
            public function test()
            {
                return $this->collect();
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertInstanceOf(Collection::class, $result);
    }

    public function testPassingDataToColleciton()
    {
        // given
        $data = ['a', 'b'];
        $flow = new class($data) {
            use Flow;
            use FlowCollect;
            public function test()
            {
                return $this->collect()->toArray();
            }
        };

        // when
        $result = $flow->test();

        // then
        $this->assertEquals($data, $result);
    }
}