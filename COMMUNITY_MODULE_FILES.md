# Community Module Files

This document lists all files related to the Community module that should be pushed to the testing repository.

## Entities (src/Entity/)
- `Community.php` - Main community entity
- `Post.php` - Post entity
- `PostCategory.php` - Post category entity
- `PostReaction.php` - Post reaction (likes/dislikes) entity
- `Comment.php` - Comment entity with threaded replies support
- `Notification.php` - Notification entity

## Controllers (src/Controller/)
- `CommunityController.php` - Main community controller
- `CommunityApiController.php` - Community API endpoints
- `CommunityDashboardController.php` - Community dashboard
- `PostController.php` - Post controller
- `PostAdminController.php` - Post admin controller
- `WebPostController.php` - Web post controller
- `CommentController.php` - Comment controller with nested replies
- `NotificationController.php` - Notification controller

## Repositories (src/Repository/)
- `CommunityRepository.php` - Community repository
- `PostRepository.php` - Post repository
- `PostCategoryRepository.php` - Post category repository
- `PostReactionRepository.php` - Post reaction repository
- `CommentRepository.php` - Comment repository
- `NotificationRepository.php` - Notification repository

## Services (src/Service/)
- `NotificationService.php` - Notification service for handling notifications

## Forms (src/Form/)
- `CommunityType.php` - Community form type

## Templates (templates/)
- `community/` - All community templates
  - `admin.html.twig`
  - `admin_form.html.twig`
  - `admin_list.html.twig`
  - `edit.html.twig`
  - `index.html.twig`
  - `new.html.twig`
  - `show.html.twig`
- `post/` - All post templates
  - `admin.html.twig`
  - `index.html.twig`
  - `show.html.twig`
- `front/community.html.twig` - Front-end community template

## Migrations (migrations/)
- `Version20251120120000.php` - Post reactions and dislikes
- `Version20251201210000.php` - Threaded/nested comments
- `Version20251201211000.php` - Notification system
- `Version20251202000000.php` - Post categories

## Configuration
- Relevant routes in `config/packages/security.yaml` (line 45: community routes)

## Additional Files (if they exist)
- Any community-related JavaScript files in `public/js/`
- Any community-related CSS files in `public/css/`
- Any community-related images/assets in `public/images/` or `assets/`

## Features Included
1. **Community Management** - Create, edit, and manage communities
2. **Post System** - Create posts within communities
3. **Post Categories** - Categorize posts with filtering and sorting
4. **Post Reactions** - Like/dislike functionality for posts
5. **Threaded Comments** - Nested comment replies
6. **Notification System** - Notifications for reactions, comments, and replies
7. **Admin Dashboard** - Community and post administration
