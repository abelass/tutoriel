<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2019-03-08 14:22:23
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'tutoriel',
    'nom' => 'Tutoriaux',
    'slogan' => 'Gérez vos tutoriaux',
    'description' => 'Gestionnaire de tutoriaux',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://web-simple.eu',
    'licence' => 'GNU/GPL v3',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.0;3.2.*]',
    'documentation' => 'https://github.com/abelass/tutoriel',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Tutoriaux',
      'nom_singulier' => 'tutoriel',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => 'on',
      'table' => 'spip_tutos',
      'cle_primaire' => 'id_tuto',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'tuto',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '10',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Descriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Format',
          'champ' => 'format',
          'sql' => 'varchar(20) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'selection',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Niveau de difficulté',
          'champ' => 'niveau',
          'sql' => 'int(2) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Matière d’origine',
          'champ' => 'matiere',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Objet/Résultat final',
          'champ' => 'resultat',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        6 => 
        array (
          'nom' => 'Quantité de tissu necessaire',
          'champ' => 'quantite_tissu',
          'sql' => 'varchar(25) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'selection',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Tutoriaux',
        'titre_objet' => 'Tutoriel',
        'info_aucun_objet' => 'Aucun tutoriel',
        'info_1_objet' => 'Un tutoriel',
        'info_nb_objets' => '@nb@ tutoriaux',
        'icone_creer_objet' => 'Créer un tutoriel',
        'icone_modifier_objet' => 'Modifier ce tutoriel',
        'titre_logo_objet' => 'Logo de ce tutoriel',
        'titre_langue_objet' => 'Langue de ce tutoriel',
        'texte_definir_comme_traduction_objet' => 'Ce tutoriel est une traduction du tutoriel numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce tutoriel',
        'titre_objets_rubrique' => 'Tutoriaux de la rubrique',
        'info_objets_auteur' => 'Les tutoriaux de cet auteur',
        'retirer_lien_objet' => 'Retirer ce tutoriel',
        'retirer_tous_liens_objets' => 'Retirer tous les tutoriaux',
        'ajouter_lien_objet' => 'Ajouter ce tutoriel',
        'texte_ajouter_objet' => 'Ajouter un tutoriel',
        'texte_creer_associer_objet' => 'Créer et associer un tutoriel',
        'texte_changer_statut_objet' => 'Ce tutoriel est :',
        'supprimer_objet' => 'Supprimer cet tutoriel',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet tutoriel ?',
      ),
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'id_secteur',
        2 => 'vue_rubrique',
        3 => 'statut_rubrique',
        4 => 'plan',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AABLvUlEQVR42u2dCZgkR3XnlVPVXdU15ZKEDjDIRiBhMIeFwRgwgm7NTF9VrZ4eMcOhBRt7vTKs5Rv8eZfFYxsfYFiw0YIxp8AHYO5zjQ0+xCkDC0ggBLbRAciyZAECgaQZSd4XdERP9FF5VVXmi8xff19+PT1d9auqF6/j/8/MePGOO44vvvjiiy+++OIr69e+fXORHLu8I4IHDx48ePDghcXL+uKNrQc8ePDgwYMHLyxeVtfRlGPKO5p53Qc8ePDgwYMHr3henhc3LzjtHVMjfhh48ODBgwcPXoG8PC/ekqPtHa0RPww8ePDgwYMHr0Benhc3LzjjHe0RPww8ePDgwYMHr0CeY6Z9oFld2JFjt3eYn3flfGF48ODBgwcPXvG8yC4a3JX2xc0Ldr1j94gfBh48ePDgwYNXLM8tIEw2AN6L97yjO+KH6cKDBw8ePHjwCuVFXtVAvAGwD+54b+B4+32UD+M4x8ODBw8ePHjwCuG5BYTTngGI4h7c9i499Ag2PHjw4MGDFyTPVQ1sGIAkpzCz5d4DwYYHDx48ePDC4nW8qgFjAJpJ9wjangHYTbDhwYMHDx684HhOw50BmIq79N+0DsEZgA7BhgcPHjx48ILj+VUDM7GbBtlFAVOeAWgTbHjw4MGDBy9IXs8zAO2kRX++ARhlu0IGDx48ePDgwSuX5wxAJ1bP7ZMaXo0g4g8PHjx48OCFy+ulWsPnGYAm4g8PHjx48OAFz0tXvecZAMQfHjx48ODBqwtvxI5CBBsePHjw4MELnEdw4MGDBw8ePMSf4MCDBw8ePHiIP8GGBw8ePHjwEH+CDQ8ePHjw4CH+8ODBgwcPHjzEHx48ePDgwYOnUfxTV/8RbHjw4MGDB68SPLf1f+pNgroEGx48ePDgwQte/JupDIDXT7hHsOHBgwcPHrygxd/1+4k3APbBHXv23yPY8ODBgwcPXrDi37Ldfqdit/63D27bs/+u11uYYMODBw8ePHhh8dr22DAASU5hxjMAXYINDx48ePDgBcfrWD13BqCZdI+g7RmA3QQbHjx48ODBC47nNNwZgKm4S/9N6xCcAegQbHjw4MGDBy84nrt67wxAK078G9YdTHv3Cwg2PHjw4MGDFx6v5xmAdtKiP98AtFLvEkSw4cGDBw8ePG08ZwA6sXpun9TwagQRf3jw4MGDBy9cXi/VGj7PADQRf3jw4MGDBy94XrrqPc8AIP7w4MGDBw9eXXh5hZ9gw4MHDx48eNXgERx48ODBgwcP8Sc48ODBgwcPHuJPsOHBgwcPHjzEn2DDgwcPHjx4iD88ePDgwYMHD/GHBw8ePHjw4GkU/9TVfwQbHjx48ODBqwTPbf2fepOgrpIPE62trZ2xurr6pJWVlcODweAv5fsn5LhKjhsHg/6t8v0/zz3XHOeOcKz8p+G4Ax48ePDgwRPNuUO+3yLHV+T4lDz+rXI8T47zl5eXf+issx7cCED8m6kMgNdPuFfWhzl06FDXBFcC/1oJ+DUkKzx48ODB08gzJ6L9fv/N/f7yf1tY2HeaQvF3/X7iDYB9cMee/fcKFv9IArlXAvo667ZILnjw4MGDFxLvNvn+Zrlivc9omgLxb9luv1OxW//bB7ft2X/X6y08UfGXs/2GBOyJcrb/WZILHjx48OBVgSea9nn5/rTZ2dlmSWsI2vbYMABJTmHGMwDdCYu/OeNfkwB9keSCBw8ePHgV5X1JzMCBYVcEJiT+HavnzgA0k+4RtD0DsHuS4i/BuK8E5b0kFzx48ODBqwnvA3KcWYD4Ow13BmAq7tJ/0zoEZwA6ExT/SAJwoRy3kgzw4MGDB69mPKN9v2C0cELi767eOwPQihP/hnUH0979gomIv9zrP14++FtIBnjw4MGDV2eeXAV/z9LSwg9OoHSw5xmAdtKiP98AtFLvEpRR/E2tpHzofyUZ4MGDBw8evBVjAr4s+9j82Jir7ZwB6MTquX1Sw6sRnIj4y4d8uHzgG0gGePDgwYMHbxPvG/Lz/BivvPdSreHzDEBzguI/J8e3SQZ48ODBgwdvR94tRivHpL/dLNv9NiYl/rIRwo8h/vDgwYMHD14i7xb5v0cXtmlQXuHPcM//RpIBHjx48ODBS8W7SU6c719Gl8Cxif/+/ftPYMEfPHjw4MGDl40nV83/2WhokOJvd/d7K8kADx48ePDg5eK9a6ddA7WL/3F2kx+SAR48ePDgwcvPuzAo8V9bWztD3vRtDB48ePDgwYM38o6BZwYh/naL3/cxePDgwYMHD95YeB8466wHN7SLv6n3P8DgwYMHDx48eOPj9fvL549T/FNX/6UVf9njvyFv9EsMHjx48ODBgzdW3r/s3Tt30hi2C3Zb/6feJKibxnlI3eKTGDx48ODBgwdvErzBM8Yg/s1UBsDrJ9xLEv/Dhw/vkjd4GYMHDx48ePDgjZ8nDYO+YNYCjCD+rt9PvAGwD+7Ys/9e0mUHebPzDB48ePDgwYM3OZ5cad+XU/xbttvvVOzW//bBbXv23/V6Cw91DPIG/4zBgwcPHjx48CbHk4X2b8qxgL9tjw0DkOQUZjwDENtVSBb/deWNfYfBgwcPHjx48CbKu1WuAnxfBvHvWD13BqCZdI+g7RmAxH7C4kj+C4MHDx48ePDgTZ4nvzs/pfg7DXcGYCru0n/TOgRnADppVhvKG3odgwcPHjx48OBNnmduuaes3ut6BqAVJ/4N6w6mvfsFaUoNIrkCcC2DBw8ePHjw4E2eJ5p7/U5Ngrbs29PzDEA7adGfbwBaaXcJMnsUM3jw4MGDBw9ecTwxAfdL2LTPGYBOrJ7bJzW8GsEo7QpDeSNPZvDgwYMHDx68QnlPTtixt5dmDZ9vAJpZxN8agN9i8ODBgwcPHrziePKc30/Yrr+bZbvfRlbxt/X/b2Dw4MGDBw8evEJ5bx5Li+A8wu9dAfikouDcJMdvS43kj8rzOmaRxLj7J8ODBw8evPrw+v2lU2UP/seKpjxfjq9rMRPy3E+M+/NmDo68iauULIh498LCwt1Ifnjw4MGDNwneYLB8umjNe5RcSbi6VPE3LyYf4kYN4j87O9skWeHBgwcP3iR5RmtEn95T9m0EaQz07VLF37yofJBby77sv7a2dhLJCg8ePHjwiuCJRp0s2vP1ctcQDI6UKv7WAJS9IOK5JCs8ePDgwSuSZ7Sn7AWEpYq/ORSUQjyMZIUHDx48eEXy5Nbzw8uuHihV/M3PZa+GtKv9SVZ48ODBg1cYz2hP2aWDo4h/6uq/uOCUvRryOEr94MGDBw9e8byo7H0D8gq/3fcn9SZB3WHBKbsUgmSFBw8ePHgl8KKyNw3KKf7NVAbA6yfcGxacskshSFZ48ODBg1cCLyp7x8Ac4u/6/cQbAPvgjj377w0LTtnbKZKs8ODBgwevBF5U9nbBGcW/Zbv9TsVu/W8f3LZn/12vt/BOpRCl7qVMssKDBw8evBJ4Udm9AjJ83rY9NgxAklOY8QzA0K5CoddBkvzw4MGDBy8HLiq7UVDKz9uxeu4MQDPpHkHbMwCx/YRDroMk+eHBgwcPXh7eWWc9uFF2I7wUn9dpuDMAU3GX/pvWITgD0EkKTqh1kCQ/PHjw4MHLy5ubO/v4shvhJXxed/XeGYBWnPg3rDuY9u4XJAYn0DpIkh8ePHjw4OXmiQE4oexGeAmft+cZgHbSoj/fALTS7hIUYB0kyQ8PHjx48EbiOQNQ5nb4CZ/XGYBOrJ7bJzW8GsEobUACq4Mk+eHBgwcP3sg8YwDK7oWT8Hl7SWv4thqAZhbx324AVNdBkvzw4MGDB28sPLMGoOxeOAmft5tlu99GVvHfbADU10GS/PDgwYMHbyy89SqA0nvhjP558wj/ZgOgvg6S5IcHDx48eOPkRVXrhZM5OAHUQZKs8ODBgwdv3LyoSr1wcgVHeR0kyQoPHjx48CbBi6rSCyd3cJTXQZKs8ODBgwdvEryoCr1wRgqO8jpIkhUePHjw4E2CF4XeC2fk4CivgyRZ4cGDBw/eJHhRyL1wxhIc5XWQJCs8ePDgwZsELwq1F479zNHIwalEHSTJDw8ePHjwsvGiQHvhuK3/U28S1B0WnKrVQcKDBw8ePHgpnh4F2Asnsjv+JhsAr59wb1hwqlQHSfLDgwcPHryUiCiwXjiR1+8n3gDYB3fs2X9vWHCqUgdJ8sODBw8evAyYKKBeOJHt8jvtGYDY9sBte/bf9XoLbwtOFeogSX548ODBg5cRFQXUC6dtjw0DkOQUZjwDMLSrUOh1kCR/ebwDBw6cKuO5tLq6+ksyli8bDAYflONz8u+vyPGNlZXBkfVj5RvyuGvM78xjzGPNc8xzDaPu4yExmZNYfFSOo2X35oAHL4FncvSj8vf7uArMf1EgvXA6Vs+dAWgm3SNoewYgtp9wyHWQiHWxvPn5+d0yZmtyvMSI+Rjz5XI5/liO/fKcTg3F/yhiAy8knvzuiOTuY0Oe/9a7AarvheM03BmAqbhL/03rEJwB6CQFJ9Q6SMS6GN7hw4dNqegeGa+L5fstk84XmVS+Ld9fI2cYeweDpROqPh72zB+xgRccT/5WPxzy/Dc3d/bxynvhuKv3zgC04sS/Yd3BtHe/YFeKCSjEOkjEesK8gwcPzsj4XCjH1WVNRoNBX24b9H9tz565u1d1PLjsDy9UnrkKEPL8JwbgBOW9cHqeAWgnLfrzDUAr7S5BAdZBItYT5JnL/DIuvy7u/notk5Ec5r080789UJXxQGzghcwLef5zBkBx/JwB6MTquX1Sw6sRjLJNQMHUQSLWk+OZBTHnifBfq3gyulpuDaxWaTwQG3gh80Ke/4wBUB6/XtIavq0GoJlF/LcbANV1kIj1hHgi+veVsXhfQJPRu/r9/r2rMB6IDbyQeSHPf2YNgPL4dbNs99vIKv6bDYD6OkjEegI8GZsnigH4VmiTkTzmm+aKRejjgdjAC5kX8vy3XgVQgfjlEX4t9yAR63J4c3OzHVOPH/pkZEoSl5aWWqGOB2IDL2ReBW57Vip+wd2DRKyL58kZv9nA59KqTEbyvI8sLCzcLcTxQGzghcwLfD6NqhS/IO9BItbF8vr95fuIAbiygpPRFVIy+MOhjQdiAy9kXuDzaVSV+AV7DxKxLlT8HyQx/2qFJ7evyWd8REjji9jAC5kX+HwaVSF+Qd+DRKwLu+x/esXF3x1fs1cCghjfzdsAIzbwQuINjgQ+n0Zlj0ep4q/hHiRiXcw9/4pe9h/Gu8KsCQhhfDdvBYzYwAuK99HA59Oo7PEoVfw13INErAtZ7f/xGk5uH/WrA7SOr7zvWbOlKmIDLySeXGW7XY6FwOfTKNReOJmq/zTfg0SsJ17n/7K6Tm6mRDCE8TWtVU1jlXgjgHjB03HZ35z5y8/zFZhPo0B74bit/1NvEtSNuQdJHWlFeRLfJzC57bxZEPkCD17teVGAvXAiu+NvI+0Wwbt32F/YvwdJHWk1xf8+ctxc9zMbs2PgsG2DyRd48GrNiwLrhRN5/X7iDYB9cMee/feGBYc60kryTGK/l8uaGybgneQLPHjw4g2A6l44ke3yO+0ZgNj2wG179t/1egtvCw51pNXjSVzXEP9tJuBc8gUePHg7GwD1vXDa9tgwAElOYcYzAEO7CoVeB0nyb+bNz8/vlhhfg/hvPmSR3VXy3A75Ag8evM0GQH0vnI7Vc2cAmkn3CNqeAYjtJxxyHSTJv50nMX0W4j/0KsCvki/w4MEzX+vdANX3wnEa7gzAVNyl/6Z1CM4AdJKCE2odJMm/nXfw4MEZOdO9HvEfdhWgf92ePXN3J1/gwYM3N3f28cp74bir984AtOLEv2HdwbR3vyAxOIHWQZL8O28q8/OIfzxPTMCvkC/w4META3CC8l44Pc8AtJMW/fkGoJV2l6AA6yBJ/h14hw8f3mXucyP+ibyrBoOlE5gs4cGrN88ZAMW9cJwB6MTquX1Sw6sRjNIGJLA6SJJ/eDXHHsQ/HU++n8NkCQ9evXnGACjvhdNLWsO31QA0s4j/dgOgug6S5I/hSXwvRvzT8eRKyauYLOHBqzfPrAFQ3gunm2W730ZW8d9sANTXQZL8Q3i29O8WxD8dTwzAt8yCSSZLePDqy1uvAqhAL5w8wr/ZAKivgyT5Y3jJG/8g/nEbA5F/8ODVdsfUSvXCyRycAOogSdYEnul6h/hn5r2IyRIevFrzorLnq1LF37yY8jpIkjUFTy5pfw7xz8z7DJMlPHi15kVlz1elir95UeV1kCRrwteBAwdORfzz8eRxJ5N/8ODVlheVPV+VKv7OACiugyRZk9dwLCH+uXnz5N/ovNXV1XPkKtTHJJ5Hyb/K844K49KVlUG/AvkclT0epYq/OZTXQTL5Jk++v8Tklpt3Ifk3uvgfE37yrz68wZF+f3k58HyOyh6PUsXf/Ky8DpLJN+FL4v4yJqPcLYIvIv9Gzr+Pk3/15Mm22h8LPJ+jUHvh2M8cjRycStRB1vgyrlx6/SCTUe4WwX9D/o2cf3eQf7XdUfNIyPlstk8PtBeO2/o/9SZB3WHBqVodZN146xUATEY52wNfRv6NxkMM680LOZ+HGwDV8Yvsjr/JBsDrJ9wbFpwq1UHWcTKXMfgKk1He9sCDq8i/0XiIYb15IefzzgZAdfwir99PvAGwD+7Ys//esOBUpQ6yrmdyMg7fYDLKawD6N5F/I+cfYlhjXsj5vN0AqI5fZLv8TnsGILY9cNue/Xe93sK7dr6EF3YdZJ0v45rVuExG+XhiAG4n/0bNP8SwzryQ83mzAVAfv7Y9NgxAklOY8QzA0K5CoddB1v0erjEATEb5eJ4BIP9y5x9iWGdeyPl8zACoj1/H6rkzAM2kewRtzwDE9hMOuQ6SBVzfm4C/wWSUj2dvAZB/I/AQw3rzQs7npz3tJ5sBxM9puDMAU3GX/pvWITgD0EkKTqh1kEy+G/s4XMNklLuO+Rryb+T8QwxrzAs5nweDpROUx89dvXcGoBUn/g3rDqa9+wWJwQm0DpLJ1/KGNwJicktRx3wZ+TcaDzGsNy/kfO73F09UHr+eZwDaSYv+fAPQSrtLEHWkYfOObQTEZJSV5zYCIv/y8zZvA0z+1Ym300ZAIeWzMwCKe+E4A9CJ1XP7pIZXIxilDQh1pGHzNm8FzOSWhedvBUz+5ePZJkDkXz15l4Scz8YAKO+F00taw7fVADSziP92A0AdaWi87c2AmNwy8C4k/0bjSVxn018FIP+qwhPjd7t8f0zI+WzWACjvhdPNst1vI6v4bzYA1JGGyNu5HTCTW0rePPk3Os+YADk+Yi4Jk3/Vv+xvzvz379//E6Hn83oVQAV64eQR/s0GgDrSUHkHDhw4lcktH09+dzL5Bw9ePXnxzYDC7IWTOTjUkYbPkzhejvhn5n2GyRIevPry8hkAvb1wcgWHOtLweRLrlyD+mXkvYrKEB6++vOwGQG8vnNzBoY40fJ7Eew3xz8aTx5zLZAkPXn152QyA3l44IwVHeR0kyZria35+fresyv024p+ad/PBgwdnmCzhwasvL70B0NsLZ+TgKK+DJFlTfknsL0b80/HELL2KyRIevHrz0hkAvb1wxhIc5XWQJGvKL4nlPsQ/dSnTLJMlPHj15iUbAL29cOxnjkYOTiXqIEl+19jiWsQ/8ez/y+YPn8kSHrx68+INgOpeOG7r/9SbBHVj9vKuVB1knXnS3e6ZiH/i2f/TyRd48OANNwCqe+FEdsffZAPg9RPuDQtOleog6578srf1PcQE/DviP/Ts/2uzs7Nt8gUePHg7GwDVvXAir99PvAGwD+7Ys//esOBUpQ6S5F/nybg8C/Efevwy+QIPHrydDYDqXjiR7fI77RmA2PbAbXv23/V6C++0l3zwdZAk/zGexLQj8b0G8d9+79+V/pEv8ODB22wA1PfCadtjwwAkOYUZzwAM7SoUeh0kyb/jbZ39iP+2Y4V8gQcP3nYDoL4XTsfquTMAzaR7BG3PAMT2Ew65DpLkH8qL5Iz33Yj/xtn/O8gXePDg+V/r3QDV98JxGu4MwFTcpf+mdQjOAHRSNJIJsg6S5I/nSbvO082Od3UXf3neN/v9/r3JF3jw4Pk8WzqtuReOu3rvDEArTvwb1h1Me/cLEoMTaB0kyZ+CJ2e+B+veJVBicIB8gQcP3laeVE2dqLwXTs8zAO2kRX++AWil3SUowDpIkj8DT2L8f+oq/vLcPyJfJs9bXV09R4zWxyTmR7ntVHmeGeOPypg/LvR8dgZAcS8cZwA6sXpun9TwagSjtAEJrA6SyTcjz9S928m5buL/kbW1/W3yZfLin174EdcKbad9ROaVx4acz8YAKO+F00taw7fVADSziP92A6C6DpLJNydvbW3tJIn1F2p02f/zCwvzJ5Mvk+fJOH0cca1tae2HQ85nswZAeS+cbpbtfhtZxX+zAVBfB8nkOwJveXnpgTIO19VgcvuKnJXem3wphicicAdiWNsFtkdCzuf1KoAK9MLJI/ybDYD6Okgm3zHwlpYWf9yYgCqL/8rK4IHkS3E8xLDevJDzOV074LDilzk4AdRBMvmOkWeuBMhZ25VVvOzPmX/xPMSw3ryQ8zmfAdAbv1zBUV4HyeQ7me2CT85271b/gj/u+ZfDQwzrzQs5n7MbAL3xyx0c5XWQTL4T4pnqAIn/S6tQ6re4uDDD+JbDQwzrzQs5n7MZAL3xGyk4yusgmXwnzJPL5ofk8vm3Qtzhj01+VOwzgRjWmBdyPqc3AHrjN3JwlNdBMvkWcxn3PjJ27wlpb3+299XBQwzrzQs5n9MZAL3xG0twlNdBMvkWx4tsF8GrNbf0lSsWA8ZXDw8xrDcv5HxONgB642c/czRycCpRB8lkPjaejGVHxuWZ8v16LZORCP/X5PsvHzx4cIbx1cVDDOvNCzmf4w2A6vi5rf9TbxLUHRYc6kjh7cTbs2fu7oNB/9fkuKasycic8cvjn24WLDK+Onnr2wAjhnXkuY2AQs3n4QZAdS+cyO74m2wAvH7CvWHBoY4UXhzPbJcpQrxHxuo1yYsFx5IvN8vrvEoeO2v+QBkP7S1V+/+EGNaWd0nI+byzAVDdCyfy+v3EGwD74I49++8NCw51pPDS8sztAbkHvyrfXywi/dkx5stn5HiRPOZcd5mf8QilpWp/ION2FDGsF0/+/m+X748JOZ+3GwDVvXAi2+V32jMAse2B2/bsv+v1Ft6VvIqXOlJ46XhLS0unyFjOy3GhjOVFMin8jXy/TL5fJWeGN8lxuz3Mv6+xvzOPucg8xzzXbErEeITNMyZAvj5uLgkjrtW/7G/O/Pfv3/8ToefzZgOgvhdO2x4bBiDJKcx4BqCrdS9vJl948ODBg1c075gBUN8Lp2P13BmAZtI9grZnAHZr3subZIUHDx48eEXz1rsBqu+F4zTcGYCpuEv/TesQnAHoaN/Lm2SFBw8ePHhF88wCZ+W9cNzVe2cAWnHi37DuYNq7X6B+L2+SFR48ePDgFc3r9xdPVN4Lp+cZgHbSoj/fALTS7hIUYB0kyQ8PHjx48EbiOQOguBeOMwCdWD23T2p4NYJR2oAEVgdJ8sODBw8evJF5xgAo74XTS1rDt9UANLOI/3YDoLoOkuSHBw8ePHhj4Zk1AMp74XSzbPfbyCr+mw2A+jpIkh8ePHjw4I2Ft14FUIFeOHmEf7MBUF8HSfLDgwcPHryx8dK1Aw6rF07m4ARQB0mywoMHDx68sfLyGQC9vXByBUd5HSTJCg8ePHjwxs7LbgD09sLJHRzldZAkKzx48ODBGzsvmwHQ2wtnpOAor4MkWeHBgwcP3th56Q2A3l44IwdHeR0kyQoPHjx48MbOS2cA9PbCGUtwlNdBkqzw4MGDB2/svGQDoLcXjv3M0cjBqUQdJMkPDx68AHhGdIifDl68AVDdC8dt/Z96k6DusOBUrQ6ySry1tbUzJL5PlePFEqv3yXHFYDD4DzluH3U85HF/Ky8RhR4/u5/3JWnzTWJ3pxzflX/fKMflcrxffn55v7/8i0tLi2cbHvkHb9y81dXVR0qufUaOu+T4wNLS0inEr1zeoUOHGgH2wonsjr/JBsDrJ9wbFpwq1UFWIVklpo+WuPyxiNJVkx4Pefwvhh4/idOzx/nHORj0vyn//xY5niITxPFMlvBG4VmReY4cR7f87f0V8SuXt7MBUN0LJ/L6/cQbAPvgjj377w0LTlXqIENO1oMHD85IPJ4hxxeKHA9zJtzv93841PitrAweJZ/jtkn9cZr4yP//mTFlTL7wsvL2799/uuTQh4fln1x1Oof4lcfbbgBU98KJbJffac8AxLYHbtuz/67XW3hbcKpQBxlqsj7lKee3zFm4xOPfSrwS80nzPkKL3/LywkkyuX62wDUsl8jj9jL5wkvDM1eQ5Lg5If8+SPzK4202AOp74bTtsWEAkpzCjGcAhnYVCr0OMtRkFfHaI8eVZa/BsJcjXxBa/OR9v6CMBazy+P8rxwOYfOENERUprT73L1Lm323ErzzeMQOgvhdOx+q5MwDNpHsEbc8A7E5wqsHWQYaYrHv2zJ0icXhp2dUXPk/ue98hlyPnQ/ljlwVVc2YxX4nxu02e+5shXjmBNzme5MTZkhtXp80/yeFPEL/yeKurK1MB9MJxGu4MwFTcpf+mdQjOAHSSghNqHWSIySoi+xC7EliN+HuT0Zf37dtzD+3jsbi4eELyJFtM/MwELubpIUy+9ebNzs6atrK/K/lwR/q/t/7Vy8tLP0r8yuMtLu47UXkvHHf13hmAVpz4N6w7mPbuFyQGJ9A6yADFv7/PlPBpFH+P90rt4yHv9WJN8TNVA7IYcT+Tbz15kgtnynFpxvy7dGFh/r7Er1ze4uLeuynvhdPzDEA7adGfbwBaaXcJCrAOMsRStf229lyz+LtjRet4yHs7T2n8TInXzzL51k78/6v8XX87S77IicDbzG1A4lc+zxkAxb1wnAHoxOq5fVLDqxGM0gYksDrIEC/79+Vz3hqI+JvL2te7TUo0jYdMnPewm/eojd/WfRWYfKvJW1hYuJvdKyJrvrxobu7s4xkPHTxjAJT3wuklreHbagCaWcR/uwFQXQcZap36zaGIv3e8Xdt4yHt6bwjxk/9/OpNvdXmmFFTG+asZ8+Wo3Cr6BeKni2fWACjvhdPNst1vI6v4bzYA6usgAxP//n3l810ToPh/75CV9j+jSPyfEUr8THWC/H6NybdaPCkZm5ZxfaHdyjfDGpHBzawR0clbrwKoQC+cPMK/2QCor4MM0Vn+Q6jib4XsW/L9PmWPh7yP+8n7+E5g8btFjgcx+VaDZ3bLlPH8dI58uXYwWH4U46GTN7wXQLi9cDIHJ4A6yOCSSz7X74Qs/t7xIb97WdHjYcurLg00fl+UCabL5Bt8b47/nm0B70aufErK/O7HeOjl5TMAenvh5AqO8jrI4JJLPvcjk+uBgxB/d0/7N0qcfA8HHr8/YfINk3fgwIFT5e/43flKQwfvkq6S92A81N/WaZQ9v5Qq/uv3qlXXQQZ3Tyn//vT6xN/eCrhdLoE+rATxf8TWDmohxk+OPUy+YfFkvJdNNUzOfHkJLaXD4GUzAHp74YwUHOV1kEElV77FaqrFy5qA/hXz83tOLVD8O+YSehXiJ0Lyub17505k8tXPk1tObRnvi/Jupy3HrzAe4fDSGwC9vXBGDo7yOsigWvrK57+uauLv8V5a1Hhk65UQQvwGz2LyVW/ef8SYtZzi/2157uMZj7B46QyA3l4441qwprkOMqTLhk+vsPib4y6Z5FYKEP+lCsbvxqWlhdOYfPXxzjrrwQ0Zn181DZ5yiv9X5XgM4xEeL9kA6O2FYz9zNHJwKlEHqSC5JAaXVVj87WQ3uNa0O53UeJgd1tJfRQkrfnI8j8lXF29tbe1ektN/M8L4fkb2+7g/4xEmL94AqO6F47b+T71JUDdmk5VK1UGWwZNJ5Kyqi7/3+z+f1HgI+80VNk9mz/i7M/nq4Mm4HMjfnOt74/k+6Z55T8YjXN5wA6C6F05kd/xNNgBeP+HesOBUqQ6yrOSSz/Hcmoi/O54w7vGQ13pqDeL3Uibfsnl7TE+JV44yviL+f2JX+jMeAfN2NgCqe+FEXr+feANgH9yxZ/+9GPGqRB1kyV3B/qlG4m+Om2Sr4HuOK35SZnjvdD0Tgo/fUbOzIZNvOTxZjDmbrbpkWzXMHSzorA5vuwFQ3Qsnsl1+pz0DENseuG3P/rteb+GdxCv4OsiSS0m66Tb+qYz4u+P98vGjUeNndhpMt21yNeInv/srJt9ieeZsXeL+W3IcGUH8b5HnP4HxqA5vswFQ3wunbY8NA5DkFGY8AzC0q1DodZBlJ5eI/2NrKP7uuHDU+MnrPbNm8bvLbHLEZF4MT4T7QRLvD40yvvL8ry0tLZ7NeFSLd8wAqO+F07F67gxAM+keQdszALH9hEOug9SQXMmb/1RW/M290O/KrYD7543f/v37H5JcflW9+Mnj/o7JfPI8uVz/NDEA3xxR/C8T8f9hxqN6vPVugOp74TgNdwZgKu7Sf9M6BGcAOknBCbUOUktyyed4cR3F35sgP2Ga9uTYhGM6edvkSsdvicl8Mjyz54KMxxtG3wFz8NfSze9ejEc1eaZrq/JeOO7qvTMArTjxb1h3MO3dL0gMTqB1kGqSSz7LW+sq/p4JeG6OKyd/WGPxN+LyWddpkcl8fLx+f3lexuOqUcdXGK9YXNx7N8ajujwzvsp74fQ8A9BOWvTnG4BW2l2CAqyDVJVcMpF/rM7i762O3ps2fnLb4HEStzvrfOXEisxTmczHOpk/z+TiiL0b7jQdMBmP6vOcAVDcC8cZgE6sntsnNbwawShtQAKrg1SXXPIZvlRn8fd4/2I3RomN39LSktl++uq6i789rp6f33syk/loPDnr/xEZi0vHMB7fESP7JMajHjxjAJT3wuklreHbagCaWcR/uwFQXQepMrnkjOHfEf+N4zUp1kxcjPhv2kv+fzKZ5+eJYD/DNOMZw22s65aXlx+HuNaHZ9YAKO+F082y3W8jq/hvNgDq6yBVJpd8hlsQ/2M8MUT9mFidh/hv5km4blpY2EejoIy8fn/pB8z6mzGtYblseXnpgYhrvXjrVQAV6IWTR/g3GwD1dZBqk8vs7ob4b+L9m/zfyVvjJLv9mS1Yb0T8t/PENL2QyTw9T0zTsunCN6bxeL8YsHshrvXjpWsHHFYvnMzBCaAOUnVyyee7C/Hf9ri37WCU3of4D+V9J2lrZSbz4457ylPOb4lZepGI/51jGo8/3bt37kTEsJ68fAZAby+cnPfQVNdBBnAPEvEfcjzNE/9nIP6JvFcwmQ//kvvzD5CYfXpM42FM+7MQw3rzshsAvb1wcgdHeR2k+uRCvIYeN8tOf6eb5jfmDBfxj+eZfhL+ropM5puuHv2cxOw74xgPs3ulPP8gYggvmwHQ2wtnpOAor4MMYLtRxCtmcdU/yvFxxD81721M5se+1tbWTpKYvGNc4yHif70cj0IM4WUzAHp74YwcHOV1kOqTC/GCN06ePObRTObfO+s3O/pdN0bx/7xcYbkvYggvmwHQ2wtnLMFRXgepPrkQL3hj5l1S58lcNopq2f4ad41xPD7w+MefdyJiCC+bAdDbC8d+5mjk4FSiDrLE5EK84I2bJ48/t46TuXz2Bx1rEDW2M/9XmeoBxBBeNgOguheO2/o/9SZB3WHBqVodZNE8xAveBBoFfa5ujYLkc/+CHLeOcTzkCsK5/wMxhJfdAKjuhRPZHX+TDYDXT7g3LDhVqoMsI7kQL3gTahT003WYzOWz3n3zHhFjiZ8xEk9ADOFlNwCqe+FEXr+feANgH9yxZ/+9YcGpSh1kWcmFeAXP+6DG9ydXAa7ds2fulIqL/4ocN4w5fjeYhZSIIbzsBkB1L5zIdvmd9gxAbHvgtj3773q9hXft8EcYfB1kmcmFuIbNkz3gHybfb9P5/ga/WcXJ9+DBgzMSo5dNIH5fEON0X8QQXnYDoL4XTtseGwYgySnMeAZgaFeh0Osgy04uxDVsnt3L4Q+Vvr9vLC0t3LtKk6/0hHiofMYrJhC/vxfxPxExhJfdAKjvhdOxeu4MQDPpHkHbMwCx/YRDroPUkFyIa9g8M75zc7Md+d2/Km2x/EcVmXwj+SzPFJG+fdzxMy2mL7jgginEEF6Wr/VugOp74TgNdwZgKu7Sf9M6BGcAOknBCbUOUktyIa5h89z4yiYxA6Wf91apjT8t5MlXRP9ephZ/QvF7DmIILw9vcXHficp74bir984AtOLEv2HdwbR3vyAxOIHWQapJLsQ1bN4WoXqH0s/7moD/Ps6T46YJxO82ed75iCG8vLzFxb13U94Lp+cZgHbSoj/fALTS7hIUYB2kquRCXMPm+WMpv/vBnRsXEb8Y3l1inL4h3z8j318rv3+quRc/Pz+/W/796gntk/AfcjwWMYQ3Cs8ZAMW9cJwB6MTquX1Sw6sRjNIGJLA6SI2lTIhDwLyt4ymP+Q3iNzLvNhHor03o/X3JdJhEDOGNyjMGQHkvnF7SGr6tBqCZRfy3C5jqOkitO5ghDgHzto6nWUy2fZU68VPCu8R0CES84I2DZ9YAKO+F082y3W8jq/hvFjD1dZBau5YxmQfM23l18Oo5xE8d78+lbGsa8YI3Lt56FUAFeuHkEf7NAqa+DlJtcjGZh82LGde/IH5qeL+NeMEbNy9dO+CweuFkDk4AdZCqk4vJPGzesLGVDWvuIb+/mfiVxzN7Bsjxk4gXvEnw8hkAvb1wcgVHeR2k+uRiMg+bFze+Ij6/TvxK431d4j+HeMGbFC+7AdDbCyd3cJTXQapPLibzsHlx42vLhC4jfoXz/lXWYdwf8YI3SV42A6C3F85IwVFeB6k+uZjMw+Ylje9g0N8nvLuIXzE8efxHZOfDUxAveJPmpTcAenvhjBwc5XWQ6pOLyTxsXpp8kce9ivgVwnvj7OxsG/GCVwQvnQHQ2wtnLMFRXgepPrmYzMPmpckXU3tudp8jfhM98/89GYYI8YJXFC/ZAOjthWM/czRycCpRB1licjGZh81Lmy/yGj9L/MbPk8cekfv9P4N4wSuaF28AVPfCcVv/p94kqDssOFWrgyyax2QeNi9DvkTy+I8Sv7GK/zfl2It4wSuDJ7ebmgH2wonsjr+NtFsE795hf+GNJ1apDrKM5GIyD5uXJV9kb4CHyq2AO4jf2HjPRbzglcXb2QCo7oUTef1+4g2AfXDHnv33hgWnKnWQZSUXk3nYvKz5Is/7Y+I3Nt4/IF7wyuJtNwCqe+FEtsvvtGcAYtsDt+3Zf9frLbxrhwkt+DrIMpOLyTxsXtZ8kRI1s/nTdcRvLLxbEC94ZfE2GwD1vXDa9tgwAElOYcYzAEO7CoVeB1l2cjGZh83Lky/yvPOJ3+g8czsF8YJXFu+YAVDfC6dj9dwZgGbSPYK2ZwBi+wmHXAepIbmYzMPm5c0XEa8PEr+ReTciXvDK4p1zzux0AL1wnIY7AzAVd+m/aR2CMwCdFPc0g6yD1JJcTOZh8/Lmy8rK4IFyHGE88vOE8SnEC15ZvL17505U3gvHXb13BqAVJ/4N6w6mvfsFicEJtA5STXIxmYfNGyVfhPMixmMk3sWIF7yyeGIATlLeC6fnGYB20qI/3wC00u4SFGAdpKrkYjIPmzdKviwuzn+/8K5lPPLxpM/CTyNe8MriOQOguBeJMwCdWD23T2p4NYJR2oAEVgepLrmYzMPmjZovImJPZjxyif+tS0sLpyFe8MriGQOgvBdJL2kN31YD0Mwi/tsFTHUdpMrkYjIPmzeOfJEFge9mPLLxZFOl1yNe8MrkmTUAynuRdLNs99vIKv6bBUx9HaTK5GIyD5s3jnwRzplmT3vGIy3PLJ4cnIV4wSuTt14FUIFeOHmEf7OAqa+DVJtcTOZh88aVL8J6AeORjifHHyFe8MrmDe8FEG4vnMzBCaAOUnVyIa5h88aVL6aPvfAuZzzieXK75HNzc7MdxAte2bx8BkBvL5xcwVFeB6k+uRDXsHnjzJe1tbUzzOY2jMfQM/8bZfHfmYgXPA287AZAby+c3MFRXgepPrkQ17B5484X0zFQuDcwHtvFX2LzMMQLnhZeNgOgtxfOSMFRXgepPrkQ17B5k8gXsyhw8+0ALvtz5g9PGy+9AdDbC2fk4Civg1SfXIhr2LxJ5YtdE/DCem8XPDgi4v9i7vnD08hLZwD09sIZS3CU10GqTy7ENWze5NeIDB4q7+11cny3RuPxXVPnT6kfPM28ZAOgtxeJ/czRyMGpRB1kicmFuIbNKypflpcX77m6ump2DXyFvN9PmMWCph1uFVr6ms9iGvuYvf3N9r7s8AcvBF68AVDdi8Rt/Z96k6BuzCYmlaqDLJqHuIbNY7KEB6+evOEGQHUvksju+NtIu0Xw7h32F97lLViqTB1kGcmFuIbNY7KEB6+evJ0NgOpeJJHX7yfeANgHd+zZfy9mB7NK1EGWlVyIa9g8Jkt48OrJ224AVPciiWyX32nPAMS2B27bs/+u11t4W3CqUAdZZnIhrmHzmCzhwasnb7MBUN+LpG2PDQOQ5BRmPAMwtKtQ6HWQZScX4ho2j8kSHrx68o4ZAPW9SDpWz50BaCbdI2h7BiC2n3DIdZAakgtxDZvHZAkPXj15690A1fcicRruDMBU3KX/pnUIzgB0koITah2kluRCXMPmMVnCg1dP3t69cycq70Xirt47A9CKE/+GdQfT3v2CxOAEWgepJrkQ17B5TJbw4NWTJwbgJOW9SHqeAWgnLfrzDUAr7S5BAdZBqkouxDVsHpMlPHj15DkDoLgXiTMAnVg9t09qeDWCUdqABFYHqS65ENeweUyW8ODVk2cMgPJeJL2kNXxbDUAzi/hvFzDVdZAqkwtxDZvHZAkPXj15Zg2A8l4k3Szb/Tayiv9mAVNfB6kyuRDXsHlMlvDg1ZO3XgVQgV4keYR/s4Cpr4NUm1yIa9g8Jkt48OrJS9cOOKxeJJmDE0AdpOrkQlzD5jFZwoNXT14+A6C3F0mu4Civg1SfXIhr2DwmS3jw6snLbgD09iLJHRzldZDqkwtxDZvHZAkPXj152QyA3l4kIwVHeR2k+uRCXMPmMVnCg1dPXnoDoLcXycjBUV4HqT65ENeweUyW8ODVk5fOAOjtRTKW4Civg1SfXIhr2DwmS3jw6slLNgB6e5HYzxyNHJxK1EGWmFyIa9g8Jkt48OrJizcAqnuRuK3/U28S1B0WnKrVQRbNQ1zD5jFZwoNXT95wA6C6F0lkd/xNNgBeP+HesOBUqQ6yjORCXMPmMVnCg1dP3s4GQHUvksjr9xNvAOyDO/bsvzcsOFWpgywruRDXsHlMlvDg1ZO33QCo7kUS2S6/054BiG0P3LZn/12vt/C24FShDrLM5EJcw+YxWcKDV0/eZgOgvhdJ2x4bBiDJKcx4BmBoV6HQ6yDLTi7ENWwekyU8ePXkHTMA6nuRdKyeOwPQTLpH0PYMQGw/4ZDrIDUkF+IaNo/JEh68evLWuwGq70XiNNwZgKm4S/9N6xCcAegkBSfUOkgtyYW4hs1jsoQHr568vXvnTlTei8RdvXcGoBUn/g3rDqa9+wWJwQm0DlJNciGuYfOYLOHBqydPDMBJynuR9DwD0E5a9OcbgFbaXYICrINUlVyIa9g8Jkt48OrJcwZAcS8SZwA6sXpun9TwagSjtAEJrA5SXXIhrmHzmCzhwasnzxgA5b1Ieklr+LYagGYW8d8uYKrrIFUmF+IaNo/JEh68evLMGgDlvUi6Wbb7bWQV/80Cpr4OUmVyIa5h85gs4cGrJ2+9CqACvUjyCP9mAVNfB0nyw4MHDx68sfHStQMOqxdJ5uAEUAdJssKDBw8evLHy8hkAvb1IcgVHeR0kyQoPHjx48MbOy24A9PYiyR0c5XWQJCs8ePDgwRs7L5sB0NuLZKTgKK+DJFnhwYMHD97YeekNgN5eJCMHR3kdJMkKDx48ePDGzktnAPT2IhlLcJTXQZKs8ODBgwdv7LxkA6C3F4n9zNHIwalEHSTJDw8ePHjwMvDiDYDqXiRu6//UmwR1hwWnanWQ8ODBgwcPXtJzL7jggqkAe5FEdsffZAPg9RPuDQtO2XWQ/f7SqSQrPHjw4MErkre0tNQLrBdJ5PX7iTcA9sEde/bfGxac8rdrHTyWZIUHDx48eEXyRIMeFVAvksh2+Z32DEBse+C2Pfvver2Fd+0QhFLrIAeDwfNJVnjw4MGDVyRPdOgPAupF0rbHhgFIcgozngEY2lVIQaOWrw8Gy6eTrPDgwYMHrwjegQMHThUtujmQXjgdq+fOADST7hG0PQMQ209YQ5c2uQrwHrMik2SFBw8ePHiT5NnFf+/X0NU0xed1Gu4MwFTcpf+mdQjOAHSSgqOlRav8/J61tbWTSFZ48ODBgzfBM/+/1tLSPOHzuqv3zgC04sS/Yd3BtHe/IDE4yvqz3yS/+x05HiZHR95eRPLDgwcPHrycvGh+fn636Mkj5Pg9Ob6pRfxT9MLpeQagnbTozzcArbS7BCkSf3jw4MGDB682vASz4wxAJ1bP7ZMaXo1glNZdMXjw4MGDBw+eul44vaQ1fFsNQDOL+G83AAwePHjw4MGDp6AXTjfLdr+NrOK/2QAwePDgwYMHD15QvXDyCP9mA8DgwYMHDx48eCH3wsm8upLBgwcPHjx48IrnlSr+5sUYPHjw4MGDB694Xqnib16UwYMHDx48ePCK55Uq/s4AMHjw4MGDBw9esbxSxd8cDB48ePDgwYNXPK9U8Tc/M3jw4MGDBw9e8bxRxD919V9cqQGDBw8ePHjw4BXPyyv8dt+f1JsEdYetNmTw4MGDBw8evOJ5OcW/mcoAeP2Ee8NWGzJ48ODBgwcPXvG8HOLv+v3EGwD74I49++8NW23I4MGDBw8ePHjF8zKKf8t2+52K3frfPrhtz/67Xm/hXenaATN48ODBgwcP3iR5Gdbwte2xYQCSnMKMZwCGdhVi8ODBgwcPHrzieSnFv2P13BmAZtI9grZnAGL7CTN48ODBgwcPXvG8lGv4dnsGYCru0n/TOgRnADpJKwUZPHjw4MGDB694Xorqva5nAFpx4t+w7mDau1+QWCfI4MGDBw8ePHjF8xL27el5BqCdtOjPNwCttLsEMXjw4MGDBw9e8byETfucAejE6rl9UsOrEYzSlhcwePDgwYMHD17xvIQde3tJa/i2GoBmFvHfbgAYPHjwFPNukcf9nRwvkeNZcvycPcy/L5LjEjm+Q/zgwQuDl7BdfzfLdr+NrOK/2QAwePDgaeMNBoPb5fvr5Zg/dOjQdFKvj+XlhVP6/f4BYb7JPpfxgAdPKS+pV894uwINNQAMHjx4mngi3neYM30R83vkbfS1urp6T2G8TFh3Mh7w4OnjjSz+o7YIZvDgwVPHu1yE/6GjdPn0HycG4OHCvILxgAdPF69U8TcvxuDBg6fqzP9N8rvOuMTffcntg65w38p4wIOnh1eq+JsXZfDgwdPBk///08OHD+8at/h7JqAhr/FqxgMePB28UsXfGQAGDx688s/8Jyn+vgmQ13s74wEPXvm8UsXfHAwePHjl3/OfxGX/GBPQFcNxJeMBD165vFLF3/zM4MGDV+5q/3Eu+Ev7Je/nkYNB/07GAx688nijiH/q6r+4yYPBgwevPJ4p9Sta/L0FwBczHvDglcfLK/x235/UmwR1h00eDB48eKXxbhulzn/UK4GLi/MPlPd3lPGAB68cXk7xb6YyAF4/4d6wyYPBgwevNN7ryhJ/d8gtiLcwHvDglcPLIf6u30+8AbAP7tiz/96wyYPBgwevHJ7s1LevTPE3P8t7OJfxgAevHF5G8W/Zbr9TsVv/2we37dl/1+stvCtdO2AGDx68CfNuSbO3/yTF3/z/7OxsW97LrYwHPHjF8zL8/bbtsWEAkpzCjGcAhnYVYvDgwSueZ7r6lS3+3lbBH2Z84cErnpfy77dj9dwZgGbSPYK2ZwBi+wkzePDgFc/bafV/GeJv54CXM77w4BXPS7mGb7dnAKbiLv03rUNwBqCTNHkwePDgFc+Txz9Lg/jbPQGezfjCg1c8L0X1XtczAK048W9YdzDt3S9InDwYPHjwiufJc35Og/jbOeBCxhcevOJ5CX+/Pc8AtJMW/fkGoJV2lyAGDx684nnOAJQt/ukMAOMLD94keAl/v84AdGL13D6p4dUIRmknDAYPHrzieeYWgAbxT74FwPjCgzcpXsLfby9pDd9WA9DMIv7bDQCDBw9eETx5/kUaxN8agD9lfOHBK56X8PfbzbLdbyOr+G82AAwePHhF8YRxiQbxH14GyPjCgzdp3lhuA+YRfs8AHGXw4MErnPed5eWFU8oW/4MHD86YngSMBzx4hd8GPDLu24CZJw8zETF48OAVz5Mz77Uyxd+eAKwwHvDgFc+Tv/9vlSr+5sWkJ/hXGTx48IrnyQTwxjLF3xqANzIe8OAVzxPtvaZU8TcvKh/k0wwePHjF88QA3C7NeO5ZlvjL+/jB9VuAjAc8eCXwPlmq+FsD8E4GDx680ngvLUP87eK/VzEe8OCVxntrqeJvDcD/ZvDgwSuHJyJ8h/z/w4oWf7ny8Eh5/bsYD3jwSuP9Yanib36WN3U+gwcPXnk8MQGfn5+f312U+C8tLZm/+y8xHvDglcdbWRn81Cjin7r6L27ykDd2JoMHD17pvDcfPnx416TF/9ChQw15P+9iPODBK5cnV+Hum1f47b4/qTcJ6sZMHpGcgVzP4MGDVy7P3JM3Aj1h8X8d4wEPXum8rxrtzSn+zVQGwOsn3EvoB/7nDB48eCq6BL5VhLo7icv+nPnDg6eDJ2b/tTnF3/X7iTcA9sEde/bfi5s85A09mcGDB08N7wurq+f++JgX/HHPHx48JTwxAAdziH/Ldvudit363z64bc/+u15v4V1DJojvkzd1K4MHD56aTULuNGcJi4vzDxylzt+W+rHaHx48Pbxb5P86GRfwt+2xYQCSnMKMZwC6KVqCvoHBgwdPG29wpN/vv1mEfGV2dradcm//FbvDH5v8wIOnj/f6jOLfsXruDEAz6R5B2zMAu9OcOchVgHMYPHjwVPNutZ37Xi6/e7Z8v9Ac5t+mpa/9HY194MFTzBOtfVwG8Xca7gzAVNyl/6Z1CM4AdDJcNjTVAJ9l8ODBgwcPHrzx80Rj/1+a1f9e9V7XMwCtOPFvWHcw7d0vyNoY5CkMHjx48ODBgzd+nvzuiRn27el5BqCdtOjPNwCt1LsEbakTNiuQGTx48ODBgwdvrLzLh232NWTfD2cAOrF6bp/U8GoEM4u/48jq4ycyePDgwYMHD95YeUsZd+ztpVrD5xmA5ijib15wbu7sE+Q+xd8yePDgwYMHD97oPNHUd+fYrr+bZbvfxqji716431/+EflA32Xw4MGDBw8evJHE/9tmT46JNfrKK/xxLy5v+OkMHjx48ODBg5efJ2V/P1NEl8+xib998cjsS04ywIMHDx48eLl4bxxW9qdZ/DcaiMjliytJBnjw4MGDBy89T7Tzc66xV3Di777W1tbOkA9zI8kADx48ePDgpRL/6/fv33960OLvbRP8Y/KBvkUywIMHDx48eMMfL4/5pmjmj1ZC/N2XuJmfkA93M8kADx48ePDg7Sz+8v1RlRJ/9yVXAR4uH+4GkgEePHjw4MHbdPxbkWf+qav/xvni8iHvI0bg8yQDPHjw4MGDt77Nr7TtvncR4u9t/Z96k6DuGF981/Ly4j3FBLydZIAHDx48eDXn/cX8/PzuAsW/mcoAeP2Ee+MSf8cyWwavrAwulN4Bt5AM8ODBgwevZjv8mYXxP1VUnb8Vf9fvJ94A2Ad37Nl/b5zi738YCcLpZp9jkgsePHjw4NWE93bZJ+e0onb4s3rest1+p2K3/rcPbtuz/67XW3jXpBYQSkCWzH0QkgsePHjw4FWU92lZ6LevqDV3Hq9tjw0DkOQUZjwD0J2k+Lsv0+tYAvQEOT5JcsGDBw8evIrwLpXjPKNxJYh/x+q5MwDNpHsEbc8A7C5C/Ld8RRKsx8itgddu30CI5IIHDx48eOp5N8v/vVqORw+7z1+A+DsNdwZgKu7Sf9M6BGcAOiWI/6avgwcPzkgA1ySYr5Tv15Jc8ODBgwdPI09OWL8sv3u5XOZfnZ2dbRetlztU73U9A9CKE/+GdQfT3v2CUsV/J97i4vwDpXLgfAn470qg/0yOS2zDoRvs1YLb0h0rtwlj4zA/p38uPHjHeJJ3dzJZFsuTOeBO8g9e0TyrMTcI44vy74/I9zfI99+VirYnyf+fpkwve54BaCct+vMNQCv1LkEFij88eBp58of/CsS6cN5ryD948GJ5zgB0YvXcPqnh1Qgi/vDgpeSJGP0VYl04763kHzx4sbxeqjV8ngFoIv7w4GXjiTD9PWJdLE+2Tf1H8g8evFheN8t2vw3EHx687Dy5B/jPiHWxPDn+mfyDB28MvLzCT7Dh1Z0nK32bYgBuR6wL59126NChBvkMD17ALYLhwQuZJ+J/P8S6HN7a2toZ5DM8eIg/PHil8ESUHo9Yl8Mz+4OQz/DgIf7w4JXCExF6PmJdDk/+//fJZ3jwEH948ErhyS2ADyPW5fDkd/9IPsODh/jDg1c4T9p5mnbWdyDW5fDk90dkIWCXfIYHD/GHB69Q3vb7/4h1Cbz95DM8eLmYEcGBBy8nT87+/xKxLp33evIZHrxswm/3/Um9SVCXYMODd+xLmn19n4jPLYh1uTzTnGV+fn43+QwPXmrxb6YyAF4/4R7Bhgdv0+X/n0Ws1fCeRj7Dg5dK/F2/n3gDYB/csWf/PYIND97GVyRnnp9FrNXwPnXWWQ9ukM/w4MXqect2+52K3frfPrhtz/67Xm9hgg2v9jy5/L+AWOviiSFbIZ/hwRvKa9tjwwAkOYUZzwB0CTY8eMcdZ840RbAuRazV8T46N3f2CeQzPHjbeB2r584ANJPuEbQ9A7CbYMODt85bWRk8CbHW2iJ4+RD5DA/eJp7TcGcApuIu/TetQ3AGoEOw4cFb583P7z1ZLjV/GbHW2yJ4bW1/m3yGB2+jeq/rGYBWnPg3rDuY9u4XEGx48CxPBOYFiLVunvz7MPkMD97Guj1nANpJi/58A9BKvUsQwYZXA97y8tKsiMtRxFo3z2wP3O/3H0o+w4O3YQA6sXpun9TwagQRf3jwLG9paeE0EZZ/QazD4Mltmiv9zYHIZ3g15fVSreHzDEAT8YcH7xiv3188UYTmnYhrcLw3yjBG5DO8GvPSVe95BgDxhwfP48nZ5PMR12B5zyGf4cFLBuQSfoINr9ri3/8VxDVsntmymXyGB28CXwQbXlV5IjI/L+JxF+IaPO8ued5T+fuABw/xhwcvzZn/MxH/SvGMCXg6fx/w4CH+8ODtyDML/uSe/wsR12ryzHoOM8b8fcCDh/jDg+dt8tP/Aakffy/iWm2emIB3LSzsuxd/H/DgERx48OTMf/kcEYerENfa8L4k/34Yfx/wEH+CA6+mvOXlhZNECJ4n9/zvQFxrxztqygQvuOCCKf4+4NVR/FNX/xFseFXjSVe/JRGFKxHD2vMul9+fzd8HvBrx3Nb/qTcJ6hJseFXgLS8vP0DuA78TMYS3ZfvgN62trZ3B3xu8Goh/M5UB8PoJ9wg2vJB5Ivw/JBP9a+Vy/52IIbwhJuAO+f5KOc7k7w1eRcXf9fuJNwD2wR179t8j2PAC5EUyqc/JhP42UwuOGMJLaQTulO9vMbeJ5ubOPoG/N3gVEf+W7fY7Fbv1v31w2579d73ewgQbnnre0tLSaTKB/7ocVyCG8EbhyRWjK8UQ/K/l5cX78/cGL2Be2x4bBiDJKcx4BqBLsOEp5kWrq6v3l4n712Sy/jDiBW8CPLmCdO4l8vOvmttJx8V0GuTvF54yXsfquTMAzaR7BG3PAOwm2PA08Q4fPiyr+FceIMdPy6T8GjmuQbzgFcy7Wn7/avn+NGM+TU7y9wtPIc9puDMAU3GX/pvWITgD0CHY8MriLS7O310m4IfIBDuQ45dksv0TOT4kZ/nfQrzgKVtAaHLyQyZH5bm/KD+vyO2DR0gOfz/zAbySeO7qvTMArTjxb1h3MO3dLyDY8ArlLS0tnCaT53NkEr3cXnZFbOCFzDONiC6TnH72eeed12M+gFcgr+cZgHbSoj/fALRS7xJEsOGNrwvfQZksr0ds4FWRJ/++TozAIvMBvIJ4zgB0YvXcPqnh1Qgi/vAK5cl+/E+nBS+8qvNsieFTmA/gFcDrpVrD5xmAJuIPr4Qz/0WzHz9iA68mPNOH4FHMB/AmzEtXvecZAMQfXqG8vXvnTEOeLyIO8OrEkysBnzt06FCD+QBe6by8wk+w4Y3Kk0v/P4k4wKsjT0zAAeYDeLQIhldbnkyY70Ac4NWU90bmA3iIP7za8mQS/AriAK+mvKuZD+Ah/vBqy7OrohEHeHXkHWU+gIf4w6stD3GAV2ce8wE8xB9ebXmIA7w685gP4CH+8GrLQxzg1ZnHfACvLPFPXf1HsOFNioc4wKszj/kAXgk8t/V/6k2CugQb3iR4iAO8OvOYD+CVIP7NVAbA6yfcI9jwJsFDHODVmcd8AK9g8Xf9fuINgH1wx5799wg2vEnwEAd4deYxH8ArUPxbttvvVOzW//bBbXv23/V6CxNseGPlIQ7w6sxjPoBXEK9tjw0DkOQUZjwD0CXY8CbBk0nwNsQBXh15sgnWd5kP4BXA61g9dwagmXSPoO0ZgN0EG96keDIRXo44wKsp79PMB/AmzHMa7gzAVNyl/6Z1CM4AdAg2vEnyZFJ8IeIAr448+b/nMx/AmyDPXb13BqAVJ/4N6w6mvfsFBBveRHnLy8s/tN4PAHGAVyve0bW1tTOYD+BNkNfzDEA7adGfbwBaqXcJItjwRuSJAXgJ4gCvZrw/YD6AN2GeMwCdWD23T2p4NYKIP7zCeMvLC6fIRPkBxAFeTXjvveCCC6aYD+BNmNdLtYbPMwBNxB9eGbz5+T2nypWAl8vkeBdiA6+iPJPbLzp06NA08wG8Anjpqvc8A4D4wyuVt3///ofIJPlSMQNXyiR6BLGBFzLP5LDN5Yvk5wcxH8BTx8sr/AQbHjx48ODBqwaP4MCDBw8ePHiIP8GBBw8ePHjwEH+CDQ8ePHjw4CH+BBsePHjw4MFD/OHBgwcPHjx4iD88ePDgwYMHT6P4p67+I9jw4MGDBw9eJXhu6//UmwR1CTY8ePDgwYMXvPg3UxkAr59wj2DDgwcPHjx4QYu/6/cTbwDsgzv27L9HsOHBgwcPHrxgxb9lu/1OxW79bx/ctmf/Xa+3MMGGBw8ePHjwwuK17bFhAJKcwoxnALoEGx48ePDgwQuO17F67gxAM+keQdszALsJNjx48ODBgxccz2m4MwBTcZf+m9YhOAPQIdjw4MGDBw9ecDx39d4ZgFac+DesO5j27hcQbHjw4MGDBy88Xs8zAO2kRX++AWil3iWIYMODBw8ePHjaeM4AdGL13D6p4dUIIv7w4MGDBw9euLxeqjV8ngFoIv7w4MGDBw9e8Lx01XueAUD84cGDBw8evLrw8go/wYYHDx48ePCqwSM48ODBgwcPHuJPcODBgwcPHjzEf/OL+z0CemPYLhgePHjw4MGDVyAvz4v7PQK6Y9guGB48ePDgwYNXIC/Pi3e8/YV3j2G7YHjw4MGDBw9egbysLx55PQJmvOYCETx48ODBgwcvDJ5jZnnxltcjoD3idsHw4MGDBw8evHJ4jbSbBEVejwB3TI344vDgwYMHDx684nnNVAbAe/CUdzTH8OLw4MGDBw8evHJ4qQxAY+tx3Ahf8ODBgwcPHjwVvCjJLezyjmjEF4cHDx48ePDgKeH9fyTyesY2lH0tAAAAAElFTkSuQmCC',
          ),
        ),
      ),
    ),
  ),
);
