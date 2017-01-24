# koning_open_graph
Open Graph tags for TYPO3 pages.

# Installation

- Download extension from TER and install it
- Include the ``Koning Open Graph - (required) Library`` static template
- Include the ``Koning Open Graph - Manual include in Page Rendering`` static template

Now a tab should be available in your page properties to set the Open Graph tags.

When your Open Graph tags aren't working in the frontend, include the ``lib.koning_open_graph`` in the headerData code of your own page configuration (your page object might have a different name than ``page`` for example).

# Configuration

You can set a default image. Override the following constants:

- ``{$plugin.tx_koningopengraph.defaultImage.url}``: absolute url to your image
- ``{$plugin.tx_koningopengraph.defaultImage.width}``: width of your image
- ``{$plugin.tx_koningopengraph.defaultImage.height}``: height of your image
