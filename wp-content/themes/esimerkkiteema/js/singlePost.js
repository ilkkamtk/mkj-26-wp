const modal = jQuery('#single-post');
const closeBtn = jQuery('#close');
const modalContent = jQuery('#modal-content');
const openModalButtons = jQuery('.open-modal');

const getSinglePost = (id) => {
  const url = singlePost.ajax_url;
  const data = new URLSearchParams({
    action: 'single_post',
    post_id: id,
  });

  jQuery.post(url, data).done((response) => {
    console.log(response);
  });
};

openModalButtons.on('click', (evt) => {
  evt.preventDefault();
  getSinglePost(evt.target.dataset.id)
});

closeBtn.on('click', () => {
  modal[0].close();
});