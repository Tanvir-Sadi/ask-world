console.log("Service Worker Loaded...");

self.addEventListener('push', function (event) {
  if (!(self.Notification && self.Notification.permission === 'granted')) {
    return;
  }

  const sendNotification = body => {
    // you could refresh a notification badge here with postMessage API
    const title = "Someone answered your question";

    return self.registration.showNotification(title, {
      body: body,
      icon : "assets/img/avatar.svg"
    });
  };

  if (event.data) {
    const message = event.data.text();
    event.waitUntil(sendNotification(message));
  }
});
