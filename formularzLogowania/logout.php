<?php
session_start(); // Rozpocznij sesję

// Zakończ sesję
session_unset(); // Usuń wszystkie zmienne sesji
session_destroy(); // Zniszcz sesję

// Przekieruj użytkownika na stronę logowania lub inną stronę
header("Location: logowanie.php");
exit();
?>