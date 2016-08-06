<?php if(!defined('KIRBY')) exit ?>

title:
  en: Timeline item
  fr: Élément du flux d'activité
pages: false
files: true
preview: parent
fields:
  contentHeadline:
    label:
      en: Content of timeline item
      fr: Contenu de l'élément du flux d'activité
    type: headline
  title:
    label:
      en: Title
      fr: Titre
    type:  text
    required: true
  description:
    label: Description
    type:  text
  published:
    label: Date
    type: date
    required: true
    width: 1/2
  icon:
    label:
      en: Icon
      fr: Icône
    type: select
    options:
      alert:
        en: Alert
        fr: Alerte
      book:
        en: Book
        fr: Livre
      building:
        en: Building
        fr: Bâtiment
      calendar:
        en: Calendar
        fr: Calendrier
      chart:
        en: Chart
        fr: Graphique
      check:
        en: Check Mark
        fr: Case à cocher
      clipboard:
        en: Clipboard
        fr: Blocnote
      clock:
        en: Clock
        fr: Horloge
      code: Code
      comment:
        en: Comment
        fr: Commentaire
      computer:
        en: Computer
        fr: Ordinateur
      conversation: Conversation
      design: Design
      document: Document
      drawer:
        en: Filing Cabinet
        fr: Meuble d'archivage
      email: Email
      experiment:
        en: Lab Experiment
        fr: Expérience
      eye:
        en: Eye
        fr: œil
      file:
        en: File
        fr: Fichier
      gear:
        en: Gear
        fr: Engrenage
      globe: Globe
      graph:
        en: Graph
        fr: Graphique 2
      hand:
        en: Hand
        fr: Main
      hierarchy:
        en: Hierarchy (Sitemap)
        fr: Hiérarchie (plan du site)
      layout:
        en: Layout
        fr: Mise en page
      lightbulb:
        en: Lightbulb
        fr: Ampoule
      money:
        en: Money
        fr: Argent
      mouse:
        en: Computer Mouse
        fr: Souris
      pencil:
        en: Pencil
        fr: Crayon
      phone:
        en: Phone
        fr: Téléphone
      photo: Photo
      pin:
        en: Map Pin
        fr: Épingle (carte)
      presentation:
        en: Presentation
        fr: Présentation
      receipt:
        en: Receipt
        fr: Reçu
      scale:
        en: Speedmeter
        fr: Indicateur de vitesse
      server:
        en: Server
        fr: Serveur
      smartphone: Smartphone
      sound:
        en: Sound
        fr: Son
      star:
        en: Star
        fr: Étoile
      thumb:
        en: Thumbs Up
        fr: Pouce en l'air
      travel:
        en: Plane
        fr: Avion
      user:
        en: User
        fr: Utilisateur
      video:
        en: Video
        fr: Vidéo
    width: 1/2
  moreHeadline:
    label:
      en: Link to more information
      fr: Un lien vers plus d'information
    type: headline
  text:
    label:
      en: Text
      fr: Texte
    type: textarea
    help:
      en: If you want the project item to have a VIEW button that links to more text, just add content to this text field.
      fr: Si vous souhaitez ajouter un bouton CONSULTEZ qui est un lien vers plus de texte, remplissez ce champ.
  link:
    label:
      en: Link
      fr: Lien
    type: url
    help:
      en: If you want the project item to have a VIEW button that links to a URL, fill out this field.
      fr: Si vous souhaitez ajouter un bouton CONSULTEZ qui est un lien vers un autre site, remplissez ce champ.
  info:
    label: Document
    type: info
    help:
      en: If you want the project item to have a DOWNLOAD button, just add a non-image file to this page.
      fr: Si vous souhaitez ajouter un bouton TELECHARGER, ajoutez un fichier non-image à cette page.

