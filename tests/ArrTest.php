<?php

namespace Braunstetter\Helper\Tests;

use Braunstetter\Helper\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{

    /**
     * @dataProvider provideSimpleArray
     */
    public function test_first_value()
    {
        $this->assertSame(Arr::firstValue(func_get_args()), 'first');
        $this->assertNull(Arr::firstValue([]));
    }

    /**
     * @dataProvider provideSimpleAttrArray
     */
    public function test_attach_to_attr($attr)
    {
        $testOutput = Arr::attach($attr, [
            'data-controller' => 'test-works',
            'class' => 'container',
            'id' => 'my-id'
        ]);

        $this->assertSame('braunstetter-example test-works', $testOutput['data-controller']);
        $this->assertSame('mt-4 px-4 py-3 container', $testOutput['class']);
        $this->assertSame('my-id', $testOutput['id']);
    }

    /**
     * @dataProvider provideSimpleAttrArray
     */
    public function test_attach_class_to_array($attr)
    {
        $this->assertSame('mt-4 px-4 py-3 test-works', Arr::attachClass($attr, 'test-works')['class']);
    }

    public function provideSimpleArray(): iterable
    {
        yield [
            3 => 'first',
            2 => 'second',
            0 => 'third'
        ];
    }

    public function provideSimpleAttrArray(): iterable
    {
        yield array(
            [
                'data-controller' => 'braunstetter-example',
                'class' => 'mt-4 px-4 py-3',
                'row_attr' => ['class' => 'bg-black']
            ]
        );
    }
}
