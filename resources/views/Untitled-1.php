$post = new Post
$post->title = 'Judul Ketiga'
$post->slug = 'judul-ketiga'
$post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsam voluptatibus modi ullam debitis quae laudantium vitae, libero in at.'
$post->body= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet atque, provident excepturi autem delectus qui nobis nostrum rerum officia dignissimos dolores repellat debitis placeat deserunt vero laborum. Illum, adipisci quos? Inventore non suscipit maiores ipsum tenetur, quia molestiae quidem cumque molestias. Doloremque, accusantium nemo! Similique odit dolorum repudiandae vitae. Vitae fugit fugiat expedita in nostrum placeat quibusdam repellendus laudantium obcaecati reiciendis ratione deleniti quod officia soluta, assumenda quisquam a maiores autem molestiae eligendi? Commodi corrupti fugiat sunt quod fugit similique, perspiciatis dolor ad porro impedit alias ratione dignissimos saepe repudiandae tenetur. Impedit modi ipsam nobis dignissimos esse praesentium tempora ab similique possimus error quod at magni facilis culpa voluptatum nulla, dolore illo corporis quidem magnam explicabo deleniti dolorum commodi!'
$post->save()


$category = new Category
$category->name = "Web Programing"
$category->

Category::create([
'name'=> 'Java programming',
'slug' => 'java-programming'
])

Post::create([
'category_id'=> '3',
'title' => 'Judul Ketiga',
'slug' => 'judul-ketiga',
'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsam voluptatibus modi ullam debitis quae laudantium vitae, libero in at.',
'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet atque, <p>provident excepturi autem delectus qui nobis nostrum rerum officia dignissimos dolores repellat debitis placeat deserunt vero laborum.</p> Illum, adipisci quos? Inventore non suscipit maiores ipsum tenetur, quia molestiae quidem cumque molestias. Doloremque, accusantium nemo! Similique odit dolorum repudiandae vitae. Vitae fugit fugiat expedita in nostrum placeat quibusdam repellendus laudantium obcaecati reiciendis ratione deleniti quod officia soluta, assumenda quisquam a maiores autem molestiae eligendi? Commodi corrupti fugiat sunt quod fugit similique,<p> perspiciatis dolor ad porro impedit alias ratione dignissimos saepe repudiandae tenetur. Impedit modi ipsam nobis dignissimos esse praesentium tempora ab similique possimus error quod at magni facilis culpa voluptatum nulla, dolore illo corporis quidem magnam explicabo deleniti dolorum commodi!</p>',
])

$post = new Post
$post->category_id =>2,
$post->title=>'Judul Kedua',
$post->excerpt= 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, veritatis.',
$post->body = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum error ea, perferendis recusandae enim numquam itaque nihil nostrum sapiente sit voluptatum! Ex officiis nihil quas hic officia ducimus mollitia iusto accusantium placeat vero tempora quaerat obcaecati explicabo vitae corrupti minus voluptas aliquid velit numquam provident asperiores, eaque debitis? Architecto ea rem amet inventore? Quaerat iste sapiente odio sit illo cumque laborum explicabo voluptas incidunt quia deserunt laudantium magni maxime, consequatur eos iusto hic maiores perspiciatis. Quis, sed aliquid! Aperiam sapiente corporis quibusdam eveniet provident sed earum recusandae. Id sit, eos inventore odio modi provident deserunt, saepe possimus reiciendis nihil quasi quis cumque aperiam? Nobis, optio dolorem totam praesentium libero obcaecati eos perferendis itaque inventore. Nesciunt minus cumque at porro quidem. Cum molestiae nam quae excepturi libero aspernatur perspiciatis voluptas. Iure.',
$post->save()
