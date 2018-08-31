# RS Courses Plugin

## Installation instructions

1. Clone this repo (or download a zip) and put the `rs-courses-page` folder in your `WordPress/wp-content/plugins/` directory

2. In the `Wordpress Admin panel` -> `Plugins`, `Activate` this plugin.

3. In WordPress, `Pages` -> `Add New`. On the new page select `RS Course Page` as the `Template` (on the right-hand side).

4. On that page, in the `Page body` editor (big box in middle of page), select `Text` in the upper-right corner and paste the `configuration JSON` like the one below.

5. That's it! Preview and edit the config as you please!

#### Sample config

```json
{"features":
  [
   {
   "slug": "how-to-register-voters-coming-soon",
   "description": "Here is a custom intro for this feature about registering",
   "image": "https://cdn.cnn.com/cnnnext/dam/assets/170125081427-voting-booth-super-tease.jpg"
  },
   {
    "slug": "how-to-hold-a-house-meeting",
    "description": "Here is a custom intro for this feature about house meetings",
    "image": "https://www.resistanceschool.com/wp-content/uploads/2018/06/Warren_As_we_proceed.jpg"
   },
   {
    "slug": "how-to-knock-on-doors-persuasion-canvass",
    "description": "Here is a custom intro for this feature about canvas",
    "image": "https://www.resistanceschool.com/wp-content/uploads/2018/07/Charlotte.png"
   }
  ],
  "show_learning_path_section": true,
  "learning_path_title": "Choose your Path",
  "show_learning_path_subtitle": true,
  "learning_path_subtitle": "We've set up courses for all different skill levels. We've handpicked courses that will match your experience level.",
  "show_learning_path_descriptions": true,
  "learning_paths":
   [
    {"title": "I want to <br/>make a difference now",
     "description": "The 2018 midterms are right around the corner. Here are the courses that you need to help out right now.",
     "course_ids": [
       "how-to-knock-on-doors-persuasion-canvass",
       "how-to-knock-on-doors-commit-to-action-canvass",
       "how-to-launch-a-canvass-coming-soon",
       "how-to-register-voters-coming-soon",
       "the-power-of-texting-coming-soon",
       "how-to-make-volunteer-calls-coming-soon",
       "how-to-hold-a-house-meeting"
      ]
    },
    {"title": "I want to <br/>become an organizer",
     "description": "I've learned the basics of organizing and am looking to take the next step.",
     "course_ids": [
       "how-to-mobilize-and-organize",
       "public-narrative",
       "how-to-build-relationships",
       "how-to-have-engaging-conversations-coming-soon",
       "how-to-build-a-team",
       "theory-of-change",
       "strategic-planning",
       "how-to-sustain-the-resistance"
      ]
    },
    {"title": "I’m an experienced activist<br/> looking for more",
     "description": "I am an experienced organizer and am ready to run an organization.",
     "course_ids": [
       "how-to-coach-public-narrative",
       "how-to-communicate-your-values",
       "communicating-across-difference",
       "shifting-public-opinion-through-strategic-messaging-and-metaphors",
       "transforming-resistance-into-a-social-movement",
       "how-to-defeat-dog-whistle-politics",
       "radical-listening-and-deep-canvassing-coming-soon"
      ]
    }
  ],
  "topic_sections":
  [
   {"category_slug": "organizing-101", "description": "Here is a custom intro for this section about organizing-101"},
   {"category_slug": "team-building", "description": "Here is a custom intro for this section about team-building"},
   {"category_slug": "contacting-voters", "description": "Here is a custom intro for this section about contacting-voters"},
   {"category_slug": "building-movements", "description": "Here is a custom intro for this section about building-movements"},
   {"category_slug": "resistance-school-berkeley", "description": "Here is a custom intro for this section about resistance-school-berkeley"}
  ]
}

```

## Editing Instructions

There are three main folders: `views`, `models`, `assets`. Everything else is config to make it a 'template' plugin.

### CSS / JS Edits

Edit the files in the `assets` folder.

The two main external libraries used are:

- [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/) used for general layout, the feature carousel, modals, and tabs
- [Slick JS](http://kenwheeler.github.io/slick/) used for the course sliders.

### Page Edits

Edit the files in `views` folder. The main view is `views/rs-courses-page.php`. Start there. The rest of the views are `partial views`, prefixed by '_' called by this view.

### Data Model edits

Edit the files in the `models` folder. The main models are 'settings' which gathers all of the data for the page (almost like a controller in MVC) and `course` in which the DB queries reside.
