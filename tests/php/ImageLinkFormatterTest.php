<?php

declare( strict_types = 1 );

namespace Wikibase\LocalMedia\Tests;

use DataValues\StringValue;
use Wikibase\LocalMedia\Services\ImageLinkFormatter;
use Wikibase\LocalMedia\Services\LocalImageLinker;

/**
 * @covers \Wikibase\LocalMedia\Services\ImageLinkFormatter
 */
class ImageLinkFormatterTest extends \MediaWikiTestCase {

	public function testCssClass() {
		$formatter = new ImageLinkFormatter( new LocalImageLinker(), 'kittens' );

		$this->assertContains(
			'class="kittens"',
			$formatter->format( new StringValue( 'MyImage.png' ) )
		);
	}

}
