<p class="date">29 September 2018 | <a href="<!-- PERMALINK -->" title="<!-- PERMALINKTITLE -->">permalink</a> | Category: <a href="/blog/posts/categories.php?category=website">Website</a></p>

## Updates and FRUSTRATIONS {.blog_post_heading .anchor #updates_frustrations}

I've _finally_ managed to update my blog in such way that permalinks now _actually_
take you to separate pages, rather than jumping to a header on the same page.
Believe me, it was rather difficult for me to do that.

### Stupid regex {.blog_post_heading}

The initial part of updating was quite easy, actually. Though because GitHub doesn't
support PHP natively (unless you're using some kind of 'approved' thingy named
Jekyll), I also have to convert my PHP pages to HTML. As the URLs I used for the
permalinks contain parameters, I can easily read them out in PHP using `_GET["param"]`.

However, as this doesn't work in HTML, I needed to convert them to static links.
And that's where that evil thing called _regex_ came into play. Long story short:
I ragequitted because it did not work as I thought it would.

### The easy way {.blog_post_heading}

As I mostly don't care _at all_ about code conventions or on how to do things the
beautiful way, I simply ended up going the easy way: some `str_replace`s and that
was it. Take that! Is there a better way? Probably. Will I end up using it? No,
because it works now, right? Still disagree? Get out of here.

### Other thoughts {.blog_post_heading}

Seen the fact that my frustration level with GitHub is now at an all time highest,
I'm thinking of moving my website to an _actual_ host, and then one which supports
the latest PHP version and more. This way I won't break my head over things like
these and I can implement loads of other cool stuff which will make my life easier.
**to be continued...**