const modal = jQuery('#single-post');
const closeBtn = jQuery('#close');
const modalContent = jQuery('#modal-content');
const openModalButtons = jQuery('.open-modal');

const getSinglePost = (id) => {
  const url = singlePost.ajax_url;
  const data = {
    action: 'single_post',
    post_id: id,
  };

  jQuery.post(url, data).done((response) => {
    modalContent.empty();
    modalContent.html(`<h2>${response.post_title}</h2>`);
    modalContent.append(response.post_content);
    modal[0].showModal();
  });
};

openModalButtons.on('click', (evt) => {
  evt.preventDefault();
  getSinglePost(evt.target.dataset.id);
});

closeBtn.on('click', () => {
  modal[0].close();
});