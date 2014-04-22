# Fragmentions

Fragmentions allow linking to document sections on WordPress sites using words or phrases.

Fragmentions were proposed by Kevin Marks in a 2014 [blog post](http://www.kevinmarks.com/fragmentions.html) as a better alternative to hyperlinking using fragments.  Fragmentions use `##` to match words or phrases in a document.

In the following example, clicking "TL;DR" would jump to the `<strong>` element containing "Life, Liberty and the pursuit of Happiness":

```
<article>
    <p>
        <a href="##pursuit">TL;DR</a>
    </p>

    <p>
        When in the Course of human events, it becomes necessary for one people 
        to dissolve the political bands which have connected them with another, 
        and to assume among the powers of the earth, the separate and equal 
        station to which the Laws of Nature and of Nature’s God entitle them, a 
        decent respect to the opinions of mankind requires that they should 
        declare the causes which impel them to the separation.
    </p>

    <p>
        We hold these truths to be self-evident, that all men are created 
        equal, that they are endowed by their Creator with certain unalienable 
        Rights, that among these are <strong>Life, Liberty and the pursuit of 
        Happiness</strong>.
    </p>
</article>
```

This plugin relies on [Jonathan Neal](http://www.jonathantneal.com/)'s [Fragmentions script](https://github.com/chapmanu/fragmentions).