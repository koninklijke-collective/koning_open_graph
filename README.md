# koning_open_graph
Open Graph tags for TYPO3 pages.

# Installation

- Download extension from TER and install it
- Include the ``Koning Open Graph - Default Page Includes`` static template

Now a tab should be available in your page properties to set the Open Graph tags.

When your Open Graph tags aren't working in the frontend, review the ``koning_open_graph/Configuration/TypoScript/PageIncludes/setup.txt`` and include the headerData code in your own page configuration (your page object might have a different name than ``page`` for example).

# Configuration

You can set a default image. Override the following constants:

- ``{$plugin.tx_koningopengraph.defaultImage.url}``: url to your image
- ``{$plugin.tx_koningopengraph.defaultImage.width}}``: width of your image
- ``{$plugin.tx_koningopengraph.defaultImage.height}}``: height of your image