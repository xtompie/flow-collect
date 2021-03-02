<?php declare(strict_types=1);

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;
use Xtompie\Flow\Flow;
use Xtompie\FlowCollect\FlowPublicCollect;

class FlowPublicCollectTest extends TestCase
{
    public function testInstanceOf()
    {
        // given
        $flow = new class([]) {
            use Flow;
            use FlowPublicCollect;
        };

        // when
        $result = $flow->collect();

        // then
        $this->assertInstanceOf(Collection::class, $result);
    }

    public function testPassingDataToColleciton()
    {
        // given
        $data = ['a', 'b'];
        $flow = new class($data) {
            use Flow;
            use FlowPublicCollect;
        };

        // when
        $result = $flow->collect()->toArray();

        // then
        $this->assertEquals($data, $result);
    }
}