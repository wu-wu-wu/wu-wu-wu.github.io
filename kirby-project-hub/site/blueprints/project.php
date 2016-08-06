<?php if(!defined('KIRBY')) exit ?>

title:
  en: Project
  fr: Projet
pages:
  template:
    - item
    - project_page
  sort: flip
files: false
fields:
  info:
    label: Info
    type: info
    text:
      en: >
        You can add sub-pages to a project page.

        These sub-pages can be project items who will be displayed in the timeline or stand-alone pages.
      fr: >
        Vous pouvez ajouter des sous-pages à une page projet. Celles-ci représentent les éléments du projet qui apparaîtront dans le flux d’activité.
  title:
    label:
      en: Title
      fr: Titre
    type:  text
    required: true
  description:
    label: Description
    type:  text
  client:
    label: Client
    type: user
    required: true
  passwordprotected:
    label:
      en: Would you like this project page to be password protected ?
      fr: Est-ce que vous souhaitez que ce projet soit protégé par un mot de passe ?
    help:
      en: If you choose "No", every person who knows the URL can access the project page. (click on "Open preview" to learn the URL)
      fr: Si vous choisissez "Non", chaque personne qui connait l'adresse de la page de projet, peut y accéder. (Cliquez sur "Prévisualiser" pour connaître l'adresse de la page)
    type: toggle
    text: yes/no
    default: yes
  rssfeed:
    label:
      en: Would you like to add an RSS feed to the project ?
      fr: Est-ce que vous souhaitez ajouter un flux RSS au projet?
    help:
      en: If you choose "YES", the project will have a public feed, accessible to all.
      fr: Si vous choisissez "Oui", le projet aura un flux publique, accessible à tous.
    type: toggle
    text: yes/no
    default: no
  text:
    label: Introduction
    type: textarea
