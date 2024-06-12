import Split from "split.js";

const splitPane = (pane1, pane2) => {
    return Split([pane1, pane2], {
        sizes: [40, 60],
        minSize: 400
    });
}

window.splitPane = splitPane;
