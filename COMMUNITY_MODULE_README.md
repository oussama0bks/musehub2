# Community Module - MuseHub

A comprehensive community management system built with Symfony, featuring posts, threaded comments, reactions, and real-time notifications.

## 📋 Overview

This module provides a complete community platform where users can:
- Create and manage communities
- Post content within communities
- Categorize posts for better organization
- React to posts (likes/dislikes)
- Comment on posts with threaded replies
- Receive notifications for interactions

## 🎯 Features

### 1. Community Management
- Create, edit, and delete communities
- Admin dashboard for community oversight
- User-friendly interface for community browsing

### 2. Post System
- Create posts within communities
- Rich text support for post content
- Post categorization with filtering
- Sorting options (newest, popular, etc.)
- Like/dislike reactions with counters

### 3. Threaded Comment System
- Comment on posts
- Reply to comments (nested/threaded structure)
- Parent-child relationship support
- Recursive comment display

### 4. Notification System
- Real-time notifications for:
  - Post reactions (likes/dislikes)
  - New comments on posts
  - Replies to comments
- Unread notification indicator
- Mark notifications as read

### 5. Post Categories
- Organize posts by category
- Filter posts by category
- Category-based navigation

## 🏗️ Architecture

### Database Schema

#### Entities
- **Community**: Main community entity
- **Post**: Posts within communities
- **PostCategory**: Categories for organizing posts
- **PostReaction**: User reactions (likes/dislikes) on posts
- **Comment**: Comments with parent-child relationships
- **Notification**: User notifications for interactions

#### Key Relationships
```
Community (1) -----> (N) Post
Post (1) -----> (N) Comment
Post (1) -----> (N) PostReaction
Post (N) -----> (1) PostCategory
Comment (1) -----> (N) Comment (self-referencing for threading)
```

### File Structure

```
src/
├── Entity/
│   ├── Community.php
│   ├── Post.php
│   ├── PostCategory.php
│   ├── PostReaction.php
│   ├── Comment.php
│   └── Notification.php
├── Controller/
│   ├── CommunityController.php
│   ├── CommunityApiController.php
│   ├── CommunityDashboardController.php
│   ├── PostController.php
│   ├── PostAdminController.php
│   ├── WebPostController.php
│   ├── CommentController.php
│   └── NotificationController.php
├── Repository/
│   ├── CommunityRepository.php
│   ├── PostRepository.php
│   ├── PostCategoryRepository.php
│   ├── PostReactionRepository.php
│   ├── CommentRepository.php
│   └── NotificationRepository.php
├── Service/
│   └── NotificationService.php
└── Form/
    └── CommunityType.php

templates/
├── community/
│   ├── admin.html.twig
│   ├── admin_form.html.twig
│   ├── admin_list.html.twig
│   ├── edit.html.twig
│   ├── index.html.twig
│   ├── new.html.twig
│   └── show.html.twig
├── post/
│   ├── admin.html.twig
│   ├── index.html.twig
│   └── show.html.twig
└── front/
    └── community.html.twig

migrations/
├── Version20251120120000.php  # Post reactions
├── Version20251201210000.php  # Threaded comments
├── Version20251201211000.php  # Notifications
└── Version20251202000000.php  # Post categories
```

## 🚀 Installation

### Prerequisites
- PHP 8.1 or higher
- Symfony 6.x
- MySQL/MariaDB
- Composer

### Setup Steps

1. **Install dependencies**
   ```bash
   composer install
   ```

2. **Configure database**
   Update your `.env` file with database credentials:
   ```env
   DATABASE_URL="mysql://user:password@127.0.0.1:3306/musehub"
   ```

3. **Run migrations**
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

4. **Load initial data (optional)**
   ```bash
   php bin/console doctrine:fixtures:load
   ```

## 💻 Usage

### Creating a Community
```php
// In your controller
$community = new Community();
$community->setName('My Community');
$community->setDescription('A great community');
$entityManager->persist($community);
$entityManager->flush();
```

### Creating a Post
```php
$post = new Post();
$post->setCommunity($community);
$post->setTitle('My First Post');
$post->setContent('Hello, community!');
$post->setCategory($category);
$entityManager->persist($post);
$entityManager->flush();
```

### Adding a Threaded Comment
```php
// Top-level comment
$comment = new Comment();
$comment->setPost($post);
$comment->setContent('Great post!');
$entityManager->persist($comment);

// Reply to comment
$reply = new Comment();
$reply->setPost($post);
$reply->setParentComment($comment);
$reply->setContent('Thanks!');
$entityManager->persist($reply);

$entityManager->flush();
```

### Sending Notifications
```php
// Using NotificationService
$notificationService->createNotification(
    $recipientUuid,
    $actorUuid,
    'post_reaction',
    $postId
);
```

## 🔌 API Endpoints

### Community API
- `GET /api/communities` - List all communities
- `GET /api/communities/{id}` - Get community details
- `POST /api/communities` - Create new community
- `PUT /api/communities/{id}` - Update community
- `DELETE /api/communities/{id}` - Delete community

### Post API
- `GET /api/posts` - List posts
- `GET /api/posts/{id}` - Get post details
- `POST /api/posts` - Create post
- `POST /api/posts/{id}/react` - React to post (like/dislike)

### Comment API
- `GET /api/posts/{id}/comments` - Get post comments
- `POST /api/posts/{id}/comments` - Add comment
- `POST /api/comments/{id}/reply` - Reply to comment

### Notification API
- `GET /api/notifications` - Get user notifications
- `POST /api/notifications/{id}/read` - Mark as read
- `GET /api/notifications/unread-count` - Get unread count

## 🎨 Frontend Integration

### Displaying Threaded Comments
```twig
{% macro render_comment(comment) %}
    <div class="comment">
        <p>{{ comment.content }}</p>
        {% if comment.replies|length > 0 %}
            <div class="replies">
                {% for reply in comment.replies %}
                    {{ _self.render_comment(reply) }}
                {% endfor %}
            </div>
        {% endif %}
    </div>
{% endmacro %}

{% for comment in post.topLevelComments %}
    {{ _self.render_comment(comment) }}
{% endfor %}
```

### Notification Badge
```twig
<div class="notification-badge">
    <span class="count">{{ unreadCount }}</span>
</div>
```

## 🧪 Testing

Run the test suite:
```bash
php bin/phpunit
```

## 📊 Database Migrations

The module includes 4 migrations:

1. **Version20251120120000**: Post reactions and dislikes counter
2. **Version20251201210000**: Threaded comments with parent-child relationships
3. **Version20251201211000**: Notification system
4. **Version20251202000000**: Post categories

## 🔒 Security

- All routes are protected with Symfony security
- CSRF protection on forms
- Input validation and sanitization
- SQL injection prevention via Doctrine ORM

## 🤝 Contributing

This module was developed as part of a school project. Contributions and improvements are welcome!

## 📝 License

This project is part of an educational assignment.

## 👨‍💻 Author

Developed for school project submission.

## 🙏 Acknowledgments

- Symfony Framework
- Doctrine ORM
- Twig Template Engine

---

**Note**: This is a community module for the MuseHub platform, designed to demonstrate full-stack web development skills including:
- Backend development with Symfony
- Database design and relationships
- RESTful API development
- Frontend templating with Twig
- Real-time notification systems
- Threaded discussion systems
