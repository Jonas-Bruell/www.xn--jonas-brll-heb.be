use engine\App;
use engine\Database;

$db = App::resolve(Database:class);
$user = $db->query('SELECT * from Users where email = ?', [
'email' => $email
])->fetch();

if ($user) {
header('Location: /')
die();
} else {
$db->query('INSERT INTO Users(email, password) VALUES(? ?)', [
'email => $email',
'password => $password',
]);
$_SESSION['user'] = [
'email' => $email
];
header('Location: /')
die();
}

