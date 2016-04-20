# MN Twig Perversion plugin for Craft CMS

Making twig do things it really shouldn&#39;t. Twig is not intended to be a general purpose programming language, and there are some things that really don't belong in the language. Tis plugin adds a few of those things anyway. Provides {% break %}, {% continue %}, and {% return %} tags for twig.

## Installation

To install MN Twig Perversion, follow these steps:

1. Download & unzip the file and place the `mntwigperversion` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

MN Twig Perversion works on Craft 2.4.x, Craft 2.5.x, Craft 2.6.x, and probably earlier versions as well.

## MN Twig Perversion Overview

-Insert text here-

## Using MN Twig Perversion

`{% break %}` to exit a for loop:

    {% for straw in haystack %}
      {% if straw == needle %}
        {% break %}
      {% endif %}
    {% endfor %}

`{% continue %}` to continue to next iteration:

    {% for straw in haystack %}
      {% if not isInteresting(straw) %}
        {% continue %}
      {% endif %}
      {# do whatever... #}
    {% endfor %}

`{% return %}` to return a value from a macro:

    {% macro foo() %}
      {# ... calculate someValue ... #}
      {% return someValue %}
    {% endmacro %}

A macro with a `{% return %}` tag will return whatever the return value is (which can be a complex expression). Any other output generated by the macro will be discarded.

## MN Twig Perversion Changelog

### 1.0.0 -- 2016.04.17

* Initial release - tags {% break %}, {% continue %} and {% return %}

Brought to you by [Marion Newlevant](http://marion.newlevant.com)